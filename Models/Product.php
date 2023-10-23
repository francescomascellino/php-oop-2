<?php

class Product
{
    public $name;
    public $price;
    public $code;
    public $stock;


    public function __construct(protected string $producName, protected float $productPrice, protected string $productCode, protected int $productStock)
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

    public function calcAge($yob)
    {
        $now = intval(date('Y'));

        if (!is_numeric($yob)) {


            //throw new Exception('It\'s not a number. The calcAge function needs a number to work.', 1);
            throw new InvalidArgumentException('It\'s not a number. The calcAge function needs a number to work.', 1);
            // https://www.php.net/manual/en/spl.exceptions.php
            // https://www.php.net/manual/en/language.exceptions.php
        } elseif ($yob > $now || $yob < $now - 100) {
            //throw new Exception('Invalid age range!');
            throw new RangeException('Invalid age range!');
        }

        return $now - $yob;
    }
}
