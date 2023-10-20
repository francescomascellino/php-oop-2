<?php

class Product
{
    public $name;
    public $price;
    public $code;
    public $stock;

    public function __construct(string $producName, float $productPrice, string $productCode, $productStock)
    {
        $this->name = $producName;
        $this->price = $productPrice;
        $this->code = $productCode;
        $this->stock = $productStock;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getStock()
    {
        return $this->stock;
    }
}
