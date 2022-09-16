<?php

namespace app\factories;

use app\classes\Book;
use app\interfaces\ProductFactoryInterface;

class BookFactory implements ProductFactoryInterface
{
    public function fill($data): Book
    {
        return new Book($data['sku'],$data['name'],$data['price'],$data['weight']);
    }

}