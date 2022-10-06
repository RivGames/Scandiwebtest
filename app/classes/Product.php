<?php

namespace app\classes;

abstract class Product
{
    protected string $name;
    protected string $sku;
    protected float $price;
    protected float $weight;
    protected int $size;
    protected int $height;
    protected int $width;
    protected int $length;

    public function __construct()
    {
        $this->name = '';
        $this->sku = '';
        $this->price = 0.0;
        $this->weight = 0.0;
        $this->size = 0;
        $this->height = 0;
        $this->width = 0;
        $this->length = 0;
    }

    public function setSku(string $sku)
    {
        if (strlen($sku) > 3) {
            $this->sku = $sku;
        } else {
            $this->sku = md5('he' . rand(1, 10));
        }
    }

    public function setName(string $name)
    {
        if (strlen($name) >= 2) {
            $this->name = $name;
        } else {
            $this->name = md5('h' . rand(1, 10));
        }
    }

    public function setPrice($price)
    {
        if ($price >= 1) {
            $this->price = $price;
        } else {
            $this->price = rand(1, 100);
        }
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

    abstract public function fill($data);

    abstract public function getData();
}
