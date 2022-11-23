<?php
ini_set('memory_limit', '-1');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1

require_once "vendor/autoload.php";
require_once "App/src/slimConfiguration.php";
$dotenv = Dotenv\Dotenv::createImmutable("./");
$dotenv->load();
date_default_timezone_set('America/Sao_Paulo');

require_once "App/Routes/index.php";

// Por algum motivo a porta tava bichada e o caminho q tu abriu o servidor tbm tava errada tem q abrir dentro da pasta backend eu tinha feito isso aí por isso tentei abrir no app, entao minha porta ta com a porra aham KKKK deixa essa 669 q é sucesso kkkkkkk jesus, obrigada bem ♥♥♥d