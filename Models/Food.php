<?php
class Food extends Product
{
    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $weight;
    public $calories;
    public $age;

    // STATIC ATTRIBUTE
    static public $type = 'food';

    public function __construct($productCategory, string $name, float $price, string $code, int $stock, float $productWeigth, float $productCalories, string $productAge)
    {
        $this->category = $productCategory;

        //PARENT VARIABLES
        parent::__construct($name, $price, $code, $stock);

        // ISTANCE VARIABLES MARKING
        $this->weight = $productWeigth;
        $this->calories = $productCalories;
        $this->age = $productAge;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getCalories()
    {
        return $this->calories;
    }

    public function getAge()
    {
        return $this->age;
    }

    // STATIC ATTRIBUTE GETTER
    public function getType()
    {
        return $this::$type;
    }
}
