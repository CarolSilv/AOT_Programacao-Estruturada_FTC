<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\PalpiteDAO;
use App\Models\PalpiteModel;

    final class PalpiteController
    {

        public function getChutes(Request $request, Response $response, array $args): Response
        {
            $palpiteDAO = new PalpiteDAO();
            $chute = $palpiteDAO -> buscarChute();
            $response = $response -> withJson($chute);
            return $response;
        }
        
        public function insertChutes(Request $request, Response $response, array $args): Response
        {
            $data = $request -> getParsedBody();
            
            $time_brasileiro = $data['time_brasileiro'];
            $placar_brasil = $data['placar_brasil'];
            $time_adversario = $data['time_adversario'];
            $placar_adversario = $data['placar_adversario'];
            $nome_apostador = $data['nome_apostador'];

            $palpiteDAO = new PalpiteDAO();
            $cadastro_bolao = new PalpiteModel;
            $cadastro_bolao ->getSelecaoBR($time_brasileiro);
            $cadastro_bolao ->setPlacarBR($placar_brasil);
            $cadastro_bolao ->setSelecaoAdv($time_adversario);
            $cadastro_bolao ->setPlacarAdv($placar_adversario);
            $cadastro_bolao ->setNomeJogador($nome_apostador);
            $palpiteDAO -> insertChute($cadastro_bolao);
            $response = $response -> withJson([
                'message' => "Chutes inseridos com sucesso."
            ]);
            return $response;
        }
    }