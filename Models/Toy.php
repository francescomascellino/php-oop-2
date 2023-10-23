<?php

class Toy extends Product
{

    // USE TRAIT TO ACQUIRE GETTERS
    use MaterialInfo;

    // FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $color;
    public $material;
    public $size;

    // STATIC ATTRIBUTE
    static public $type = 'toy';

    public function __construct($productCategory, string $name, float $price, string $code, int $stock, string $productColor, string $productMaterial, string $productSize)
    {
        $this->category = $productCategory;

        //PARENT VARIABLES
        parent::__construct($name, $price, $code, $stock);

        // ISTANCE VARIABLES MARKING
        $this->color = $productColor;
        $this->material = $productMaterial;
        $this->size = $productSize;
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

    public function getSize()
    {
        return $this->size;
    }

    // STATIC ATTRIBUTE GETTER
    public function getType()
    {
        return $this::$type;
    }
}
