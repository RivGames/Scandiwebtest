<?php

namespace app\classes;

class Book extends Product
{
    public function setWeight($weight)
    {
        if ($weight > 0) {
            $this->weight = $weight;
        } else {
            $this->weight = 1;
        }
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function fill($data)
    {
        $this->setName($data['name']);
        $this->setPrice($data['price']);
        $this->setSku($data['sku']);
        $this->setWeight($data['weight']);
    }

    public function getData(): array
    {
        return [
            'name' => $this->getName(),
            'sku' => $this->getSku(),
            'price' => $this->getPrice(),
            'weight' => $this->getWeight(),
            'size' => $this->size,
            'height' => $this->height,
            'width' => $this->width,
            'length' => $this->length,
        ];
    }
}