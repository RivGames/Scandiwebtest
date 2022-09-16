<?php

namespace app\classes;

class Book extends Product
{
    private float $weight;
    public function __construct($sku, $name, $price,$weight)
    {
        parent::__construct($sku, $name, $price);
        $this->weight = $weight;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
}