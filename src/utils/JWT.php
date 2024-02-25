<?php
require_once __DIR__ . '../../../vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTHandler {
    private $chave_secreta;

    public function __construct($chave_secreta) {
        $this->chave_secreta = $chave_secreta;
    }

    // Método para gerar um token JWT
    public function gerarToken($dados) {
        return JWT::encode($dados, $this->chave_secreta, 'HS256');
    }

    // Método para verificar e decodificar um token JWT
    public function verificarToken($token) {
        try {
            return JWT::decode($token,new Key($this->chave_secreta, 'HS256'));
        } catch (Exception $e) {
            return false;
        }
    }
}
?>
