<?php

class QuoteModel extends BaseModel {
    private $apiAwsUrl = API_WS_URL;

    public function getAll()
    {
        // $pdo = $this->getPDO();
        // $query = "SELECT * FROM quote";
        // $stmt = $pdo->prepare($query);
        // $stmt->execute();
        // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // return $users;
    }

    public function cotizar(array $requestData)
    {
        $result = $this->consultarApiWs($requestData);

        $cotizaciones = $result['cotizaciones'];

        if (empty($cotizaciones)) {
            throw new Exception("No se encontraron cotizaciones para la placa: " . $requestData['placa']);
        }

        // mapeo de los datos provenientes de la api ws
        $cotizaciones = array_map(function($cotizacion) {
            return [
                "numero" => $cotizacion['no_cotizacion'],
                "placa" => $cotizacion['placa'],
                "valor" => $cotizacion['valor'],
                "plan" => $cotizacion['nombre_producto'],
            ];

        }, $cotizaciones);

        // print_r($cotizaciones);
        // die();

        $response = [
            "cotizaciones" => $cotizaciones,
        ];

        return $response;
    }

    public function consultarApiWs(array $requestData)
    {
        $url = $this->apiAwsUrl . "/cotizar";
        $data = json_encode($requestData);
        $headers = [
            'Content-Type: application/json',
        ];
        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
        $response = curl_exec($ch);
        curl_close($ch);

        // echo "response api ws";
        // echo "<br>";
        // print_r($response);
        // die();

        $response = json_decode($response, true);
        
        return $response;
    }
}