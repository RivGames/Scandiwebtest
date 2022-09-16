<?php

namespace base\core;

use base\core\TSingleton;
use PDOStatement;
//use PDO;
class Db
{
    use TSingleton;

    protected object $pdo;
    protected object $pdos;
    public function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        ];
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);
    }
    public function execute($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($params);
    }

    public function prepare($sql)
    {
        return $this->pdo->prepare($sql);
    }

    public function bindValue($sql,$data)
    {
        $st = $this->pdo->prepare($sql);
        foreach($data as $name => $value){
            $st->bindValue(":{$name}",$value,PDO::PARAM_INT);
        }
        $this->execute($st);
    }
    public function query($sql, $params = [])
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute($params);
        if ($res !== false) {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return [];
    }
}