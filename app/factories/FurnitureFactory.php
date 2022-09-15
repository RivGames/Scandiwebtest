<?php

namespace app\factories;

use app\classes\Furniture;
use app\interfaces\ProductFactoryInterface;

class FurnitureFactory implements ProductFactoryInterface
{
    public function fill($data): Furniture
    {
        return new Furniture($data['sku'],$data['name'],$data['price'],$data['height'],$data['width'],$data['length']);
    }
}