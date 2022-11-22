<?php

namespace App\DAO;

    abstract class Conexao
    {
        protected $pdo;

        public function __construct()
        {
            $host = $_ENV['BD_HOST'];
            $port = $_ENV['PORT'];
            $user = $_ENV['BD_USER'];
            $pass = $_ENV['BD_PASS'];
            $dbname = $_ENV['BD_DB'];

            $dsn = "mysql:host={$host};dbname={$dbname};port{$port}";

            $this -> pdo = new \PDO($dsn, $user, $pass);
            $this -> pdo -> setAttribute(
                \PDO :: ATTR_ERRMODE,
                \PDO :: ERRMODE_EXCEPTION
            );
        }
    }