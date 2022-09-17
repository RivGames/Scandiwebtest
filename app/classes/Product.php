<?php

namespace app\classes;
abstract class Product
{
    protected string $name;
    protected string $sku;
    protected float $price;

    public function setSku(string $sku)
    {
        if (strlen($sku) > 3) {
            $this->sku = $sku;
        } else {
            $this->sku = md5('he' . rand(1,10));
        }
        return $this;
    }

    public function setName(string $name)
    {
        if (strlen($name) >= 2) {
            $this->name = $name;
        } else {
            $this->name = md5('h' . rand(1,10));
        }
        return $this;
    }

    public function setPrice($price)
    {
        if ($price >= 1) {
            $this->price = $price;
        } else {
            $this->price = rand(1,100);
        }
        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    abstract public function getData();
}