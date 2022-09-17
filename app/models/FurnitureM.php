<?php

namespace app\models;

use base\core\Model;

class FurnitureM extends Model
{
    protected $table = 'furniture';

    public function save($data)
    {
        $sql = ("INSERT INTO {$this->table} (name,sku,price,height,width,length)
                VALUES (:name, :sku, :price, :height, :width, :length)");
        $this->pdo->bindValue($sql, $data);
    }

}