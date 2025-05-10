<?php

class QuoteModel extends BaseModel {
    private $apiAwsUrl = "https://api.example.com";

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
        $this->consultarApiWs($requestData);

        $cotizaciones = [
            [
                'numero' => '1234567',
                'placa' => 'ABC123',
                'valor' => '1000000',
                'plan' => 'Todo Riesgo',
            ],
            [
                'numero' => '1234567',
                'placa' => 'ABC123',
                'valor' => '1000000',
                'plan' => 'Todo Riesgo',
            ]
        ];

        $response = [
            "cotizaciones" => $cotizaciones,
        ];

        return $response;
    }

    public function consultarApiWs(array $requestData)
    {
        // $url = "https://api.example.com/endpoint";
        // $data = json_encode($requestData);
        // $headers = [
        //     'Content-Type: application/json',
        //     'Authorization: Bearer YOUR_API_KEY'
        // ];
        // 
        // $ch = curl_init($url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // 
        // $response = curl_exec($ch);
        // curl_close($ch);
        // 
        // return json_decode($response, true);
    }
}