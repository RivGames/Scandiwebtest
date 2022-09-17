<?php

namespace app\models;

use base\core\Model;

class Main extends Model
{
    protected $table = 'products';
    public array $attributes = [
        'sku' => '',
        'name' => '',
        'price' => '',
        'weight' => null,
        'size' => null,
        'height' => null,
        'width' => null,
        'length' => null,
    ];

//    public function deleteProduct($id)
//    {
//        $sql = "DELETE FROM {$this->table} WHERE id= :id";
//
//        $this->pdo->execute()
//        $this->query("")
//    }
}