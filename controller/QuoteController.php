<?php

class QuoteController extends BaseController {
    public function index()
    {
        echo "API SGA";
    }

    public function cotizar()
    {
        $quoteModel = new QuoteModel();
        $data = $this->getRequestData();
        $response = $quoteModel->cotizar($data);
        $this->jsonResponse($response);
    }
}