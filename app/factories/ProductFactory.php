<?php

namespace app\factories;

class ProductFactory
{
    public function getProductType($productType)
    {
        $lookupArray = [
            'book' => 'Book',
            'dvd' => 'DVD',
            'furniture' => 'Furniture'
        ];
        if( ! array_key_exists($productType, $lookupArray)) {
            throw new \RuntimeException('Incorrect product type');
        }

        $className = "app\\classes\\" . $lookupArray[$productType];

        return ( new $className );
    }
}