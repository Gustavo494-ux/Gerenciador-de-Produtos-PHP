<?php
require_once __DIR__ . '../../../../vendor/autoload.php';

class MySQLConnection {
    private 
        $conn,
        $host, 
        $username,
        $password,
        $database,
        $port;

    public function __construct() {
        $this->host = $_ENV['DB_HOST'];
        $this->username = $_ENV['DB_USERNAME'];
        $this->password = $_ENV['DB_PASSWORD'];
        $this->database = $_ENV['DB_DATABASE'];
        $this->port = $_ENV['DB_PORT'];
    }

    public function conectar(){
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);

        if ($this->conn->connect_error) {
            die("Erro na conexão: " . $this->conn->connect_error);
        }
    }

    public function retornarConexao() {
        return $this->conn;
    }
}