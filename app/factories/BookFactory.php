<?php

namespace app\factories;

use app\classes\Book;
use app\interfaces\ProductFactoryInterface;

class BookFactory implements ProductFactoryInterface
{
    public function fill($data): Book
    {
        return (new Book)->setSku($data['sku'])->setName($data['name'])->setPrice($data['price'])->setWeight($data['weight']);
    }

}