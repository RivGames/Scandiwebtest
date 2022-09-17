<?php

namespace app\models;

use base\core\Model;

class BookM extends Model
{
    protected $table = 'books';

    public function save($data)
    {
        $sql = ("INSERT INTO {$this->table} (name,sku,price,weight)
                VALUES (:name, :sku, :price, :weight)");
        $this->pdo->bindValue($sql, $data);
    }
}