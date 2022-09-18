<?php

namespace app\models;

use base\core\Model;

class Main extends Model
{
    protected $table = 'products';
    public function save($data)
    {
        $sql = "INSERT INTO {$this->table} (name,sku,price,weight,size,height,width,length)
                VALUES (:name, :sku, :price, :weight, :size, :height, :width, :length)";
        $this->db->bindValue($sql, $data);
    }

    public function deleteProduct($ids)
    {
        $sql = "DELETE FROM products WHERE id= :id";
        foreach ($ids as $id) {
            $this->db->bindParam($sql, $id, ':id');
        }
    }
}