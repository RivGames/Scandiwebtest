<?php

namespace app\classes;

class DVD extends Product
{
    private float $size;
    public function __construct($sku, $name, $price,$size)
    {
        parent::__construct($sku, $name, $price);
        $this->size = $size;
    }

    public function getSize(): float
    {
        return $this->size;
    }
}