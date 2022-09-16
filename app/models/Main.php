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
        'weight' => '',
        'height' => '',
        'width' => '',
        'length' => '',
    ];
//    public function findAll()
//    {
//        $this->query('SELECT * FROM products WHERE IS');
//    }
}