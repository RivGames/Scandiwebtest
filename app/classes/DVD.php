<?php

namespace app\classes;

class DVD extends Product
{
    private float $size;

    public function getSize(): float
    {
        return $this->size;
    }

    public function setSize($size)
    {
        if($size > 0){
            $this->size = $size;
        }else{
            $this->size = rand(1,100);
        }
        return $this;
    }
    public function getData(): array
    {
        return[
            'name' => $this->getName(),
            'sku' => $this->getSku(),
            'price' => $this->getPrice(),
            'size' => $this->getSku(),
        ];
    }

}