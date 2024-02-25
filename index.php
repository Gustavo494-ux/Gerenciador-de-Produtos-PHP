<?php

use function Config\Variaveis\CarregarArquivoEnv;

require_once './src/config/variaveis/variaveisAmbiente.php';


CarregarArquivoEnv(__DIR__);
var_dump($_ENV);



?>
