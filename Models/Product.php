<?php

class Product
{
    public $name;
    public $price;
    public $code;
    public $stock;
    public $discount;


    // PROTECTED ATTRIBUTES CAN NOT BE EDITED
    public function __construct(protected string $producName, protected float $productPrice, protected string $productCode, protected int $productStock, int $productDiscount)
    {
        $this->name = $producName;
        $this->price = $productPrice;
        $this->code = $productCode;
        $this->stock = $productStock;
        $this->discount = $productDiscount;
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

    public function getDiscountValue()
    {

        //EXEPTION (THIS SHOP DOES NOT ALLOWS DISCOUNTS > 60%)

        if ($this->discount < 0 || $this->discount > 60) {
            // SE IL VALORE E' NEGATIVO O MAGGIORE DI 60
            throw new RangeException('IVALID DISCOUNT RANGE. THE VALUE MUST BE A NUMBER BETWEEN 0 AND 60');
        }

        // RETURNS THE DISCOUNT % VALUE
        return $this->discount;
    }

    //EXEPTION (THIS SHOP DOES NOT ALLOWS DISCOUNTS > 60%)
    public function setDiscount()
    {
        if ($this->discount < 0 || $this->discount > 60) {
            // SE IL VALORE E' NEGATIVO O MAGGIORE DI 60
            throw new RangeException('IVALID DISCOUNT RANGE. THE VALUE MUST BE A NUMBER BETWEEN 0 AND 60');
        }

        // RETURNS THE DISCOUNTED PRICE
        return round($this->price - (($this->discount * $this->price) / 100), 2);
    }
}
