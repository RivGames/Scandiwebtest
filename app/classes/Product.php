<?php

namespace app\classes;
abstract class Product
{
    protected string $sku;
    protected string $name;
    protected float $price;

    public function __construct($sku, $name, $price)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }
}