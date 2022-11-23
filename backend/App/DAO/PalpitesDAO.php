<?php

namespace App\DAO;

use App\DAO\Conexao;
use App\Models\PalpitesModel;
use PDO;

class PalpitesDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function buscarChute(): array
    {
        $palpites = $this->pdo->query(
            "SELECT 
            id_cadastro,
            time_brasileiro AS Brasil,            
            placar_brasil AS Placar_Brasil,
            time_adversario AS Selecao_Adv,
            placar_adversario AS Placar_Adv,
            nome_apostador AS Nome,
            data_hora_aposta AS Data
            FROM cadastrar_bolao"
            )
            ->fetchAll(PDO::FETCH_ASSOC);

        return $palpites;
    }

    public function insertChute(PalpitesModel $cadastro_bolao): void
    {
        $statement = $this->pdo
            ->prepare(
                "INSERT INTO 
                cadastrar_bolao(
                time_brasileiro,            
                placar_brasil,
                time_adversario,
                placar_adversario,
                nome_apostador)
                VALUES(
                :time_brasileiro,            
                :placar_brasil,
                :time_adversario,
                :placar_adversario,
                :nome_apostador);"
            );

        $statement->execute([
            'time_brasileiro' => $cadastro_bolao
                ->getSelecaoBR(),
            'placar_brasil' => $cadastro_bolao
                ->getPlacarBR(),
            'time_adversario' => $cadastro_bolao
                ->getSelecaoAdv(),
            'placar_adversario' => $cadastro_bolao
                ->getPlacarAdv(),
            'nome_apostador' => $cadastro_bolao
                ->getNomeJogador()
        ]);
    }
}
