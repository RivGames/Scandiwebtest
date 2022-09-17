<?php

namespace app\models;

use base\core\Model;

class DVDM extends Model
{
    protected $table = 'dvds';

    public function save($data)
    {
        $sql = ("INSERT INTO {$this->table} (name,sku,price,size)
                VALUES (:name, :sku, :price, :size)");
        $this->pdo->bindValue($sql, $data);
    }
}