<?php

use App\Controllers\HelloWorldController;
use App\Controllers\PalpitesController;

use function src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

   $app->GET('/', HelloWorldController::class . ':HelloWorld');
   //Uma dica não precisa colocar o nome como get_palpites não, intuitivamente quando se faz uma request get em uma API espera trazer dados então só palpites já da certo já. Mesma coisa para inserir, sendo post o metodo intuitivamente já quer dizer q aquilo vai inserir algo no banco, então só /palpites já serve, tendeu? pera, tõ relendoAaah  ta tendi mesmo?uhum não precisa criar dois nomes só alterar os metodos mais ou menos isso, a ideia é mais para ficar limpo msm as nomeclaturas das rotas da API. É issosa acho q já tá rodando
   $app->GET('/palpites', PalpitesController::class . ':getChutes');
   $app->POST('/palpites', PalpitesController::class . ':insertChutes');

$app->run();
