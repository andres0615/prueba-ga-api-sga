<?php

class QuoteController extends BaseController {
    public function index()
    {
        echo "API SGA";
    }

    public function cotizar()
    {
        try {
        
        $quoteModel = new QuoteModel();
        $data = $this->getRequestData();
        $response = $quoteModel->cotizar($data);
        $this->jsonResponse($response);

        } catch (Throwable $e) {
            // echo $e->getMessage();
            $response = [
                'error' => 'Error al procesar la solicitud',
                'message' => $e->getMessage()
            ];
            $this->jsonResponse($response);
        }
    }
}