<?php

class BaseModel {

    private $pdo;

    public function __construct()
    {
        // $dsn = "";
        // $username = "root";
        // $password = "";
        // $this->pdo = new PDO($dsn,$username,$password);
    }

    public function getPDO()
    {
        return $this->pdo;
    }
    
}