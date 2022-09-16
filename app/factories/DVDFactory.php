<?php

namespace app\factories;

use app\classes\DVD;
use app\interfaces\ProductFactoryInterface;

class DVDFactory implements ProductFactoryInterface
{
    public function fill($data): DVD
    {
        return new DVD($data['sku'],$data['name'],$data['price'],$data['size']);
    }
}