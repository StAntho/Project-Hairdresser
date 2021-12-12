<?php

namespace Core;

use PDO;

class Databasecho
{
    protected $pdo;

    public function __construct()
    {
        include ROOT . '/config/DataBase.php';

        $this->pdo = new PDO(
            'mysql:host=' .
                $config['host'] .
                ';dbname=' .
                $config['dbname'] .
                ';charset=uft8',
            $config['user'],
            $config['pwd'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]
        );
    }

    public function getPDO()
    {
        return $this->pdo;
    }
}
