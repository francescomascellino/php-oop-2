<?php

class Kennel extends Product
{

    // USE TRAIT TO ACQUIRE GETTERS
    use MaterialInfo;

    // FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $weight;
    public $heigth;
    public $width;
    public $length;
    public $color;
    public $material;

    // STATIC ATTRIBUTE
    static public $type = 'kennel';

    public function __construct($productCategory, string $name, float $price, string $code, int $stock,  int $discount, float $productWeigth, float $productHeigth, float $productWidth, float $productLength, string $productColor, string $productMaterial)
    {
        $this->category = $productCategory;

        //PARENT VARIABLES
        parent::__construct($name, $price, $code, $stock, $discount);

        // ISTANCE VARIABLES MARKING
        $this->weight = $productWeigth;
        $this->heigth = $productHeigth;
        $this->width = $productWidth;
        $this->length = $productLength;
        $this->material = $productMaterial;
        $this->color = $productColor;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getMesurements()
    {
        return "H $this->heigth cm, W $this->width cm, L $this->length cm";
    }

    /* THESE METHODS CAN BE REMOVED AS NOW THEY ARE PART OF THE MaterialInfo TRAIT
    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    } */

    // STATIC ATTRIBUTE GETTER
    public function getType()
    {
        return $this::$type;
    }
}
