<?php
class Toy extends Product
{

    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $color;
    public $material;
    public $size;

    public $type = 'toy';

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

    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getSize()
    {
        return $this->size;
    }
}
