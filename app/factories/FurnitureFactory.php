<?php

namespace app\factories;

use app\classes\Furniture;
use app\interfaces\ProductFactoryInterface;

class FurnitureFactory implements ProductFactoryInterface
{
    public function fill($data): Furniture
    {
        return (new Furniture())
            ->setSku($data['sku'])
            ->setName($data['name'])
            ->setPrice($data['price'])
            ->setHeight($data['height'])
            ->setWidth($data['width'])
            ->setLength($data['length']);
    }
}