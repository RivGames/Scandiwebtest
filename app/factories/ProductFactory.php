<?php

namespace app\factories;

use app\classes\Product;

class ProductFactory
{
    public function getFactory($type): object
    {
        switch ($type){
            case 'book':
                $factory = new BookFactory();
                break;
            case 'furniture':
                $factory = new FurnitureFactory();
                break;
            case 'dvd':
                $factory = new DVDFactory();
                break;
            default:
                throw new \Exception('this type is undefined');
        }
        return $factory;
    }
}