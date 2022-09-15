<?php

namespace app\classes;

class Furniture extends Product
{
    private int $height;
    private int $width;
    private int $length;

    public function __construct($sku, $name, $price,$height,$width,$length)
    {
        parent::__construct($sku, $name, $price);
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getLength(): int
    {
        return $this->length;
    }
}