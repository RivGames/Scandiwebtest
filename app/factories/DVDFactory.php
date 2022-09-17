<?php

namespace app\factories;

use app\classes\DVD;
use app\interfaces\ProductFactoryInterface;

class DVDFactory implements ProductFactoryInterface
{
    public function fill($data): DVD
    {
        return (new DVD())
            ->setSku($data['sku'])
            ->setName($data['name'])
            ->setPrice($data['price'])
            ->setSize($data['size']);
    }
}