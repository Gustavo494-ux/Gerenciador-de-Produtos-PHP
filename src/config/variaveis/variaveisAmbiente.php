<?php
namespace Config\Variaveis;

require_once __DIR__ . '../../../../vendor/autoload.php';

use Dotenv\Dotenv;

function CarregarArquivoEnv($diretorio){
    $dotenv = Dotenv::createImmutable($diretorio);
    $dotenv->safeLoad();
}
