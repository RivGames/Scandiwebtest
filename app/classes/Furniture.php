<?php

namespace app\classes;

class Furniture extends Product
{
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

    public function setHeight($height)
    {
        if ($height > 0) {
            $this->height = $height;
        } else {
            $this->height = rand(1, 100);
        }
    }

    public function setWidth($width)
    {
        if($width > 0){
            $this->width = $width;
        }else{
            $this->width = rand(1,100);
        }
    }

    public function setLength($length)
    {
        if($length > 0){
            $this->length = $length;
        }else{
            $this->length = rand(1,100);
        }
    }

    public function fill($data)
    {
        $this->setName($data['name']);
        $this->setPrice($data['price']);
        $this->setSku($data['sku']);
        $this->setHeight($data['height']);
        $this->setWidth($data['width']);
        $this->setLength($data['length']);
    }

    public function getData(): array
    {
        return [
            'name' => $this->getName(),
            'sku' => $this->getSku(),
            'price' => $this->getPrice(),
            'size' => $this->size,
            'weight' => $this->weight,
            'height' => $this->getHeight(),
            'width' => $this->getWidth(),
            'length' => $this->getLength(),
        ];
    }


}