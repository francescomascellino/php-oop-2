<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

Bonus (non opzionale):
organizzate il progetto come visto stamattina a lezione usando varie sottocartelle per inserire classi, layout e dati.
-->

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Category
{
    public $pet;
    public $icon;

    public function __construct(string $petType, string  $iconSrc)
    {
        $this->pet = $petType;
        $this->icon = $iconSrc;
    }

    public function getPet()
    {
        return $this->pet;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}

$dogCategory = new Category('Cani', '<i class="fa-solid fa-dog"></i>');

$catCategory = new Category('Gatti', '<i class="fa-solid fa-cat"></i>');

class Product
{
    public $name;
    public $price;
    public $code;
    public $stock;

    public function __construct(string $producName, float $productPrice, int $productCode)
    {
        $this->name = $producName;
        $this->price = $productPrice;
        $this->code = $productCode;
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

class Toy extends Product
{

    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $color;
    public $material;
    public $size;


    public function __construct($productCategory, string $name, string $price, string $code, int $stock, string $productColor, string $productMaterial, string $productSize)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $stock);
        $this->color = $productColor;
        $this->material = $productMaterial;
        $this->size = $productSize;
    }
}

class Food extends Product
{
    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $weight;
    public $calories;
    public $age;


    public function __construct($productCategory, string $name, string $price, string $code, int $stock, string $productWeigth, string $productCalories, string $productAge)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $stock);
        $this->weight = $productWeigth;
        $this->calories = $productCalories;
        $this->age = $productAge;
    }
}

class Kennel extends Product
{
    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $weight;
    public $heigth;
    public $width;
    public $length;
    public $material;
    public $color;


    public function __construct($productCategory, string $name, string $price, string $code, int $stock, string $productWeigth, string $productHeigth, string $productWidth, string $productLength, string $productMaterial, string $productColor)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $stock);
        $this->weight = $productWeigth;
        $this->heigth = $productHeigth;
        $this->width = $productWidth;
        $this->length = $productLength;
        $this->material = $productMaterial;
        $this->color = $productColor;
    }
}

$kongBig = new Item($dogCategory, 50, 'Kong XL', 'toy', 'big', 'green', 10);

$kong = new Item($dogCategory, 50, 'Kong', 'toy', 'small', 'red', 10,);

$mongee = new Item($dogCategory, 60, 'Mongee', 'food', 'big', '', 100);

$friskees = new Item($catCategory, 60, 'Friskees', 'food', 'small', '', 50);

$productsList = [];
array_push($productsList, $kong, $kongBig, $mongee, $friskees);

// var_dump($productsList);
// var_dump($productsList[0]->category->pet);
// var_dump($productsList[0]->type)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 2</title>
</head>

<body>

    <h1>Gatti</h1>
    <hr>

    <?php foreach ($productsList as $product) : ?>

        <?php if ($product->category->pet == 'Gatti') : ?>


            <?php if ($product->type == 'toy') : ?>
                <p><?= $product->getName() ?></p>
            <?php endif ?>

            <?php if ($product->type == 'food') : ?>
                <p><?= $product->getName() ?></p>
            <?php endif ?>

        <?php endif ?>
    <?php endforeach; ?>

    <h1>Cani</h1>
    <hr>

    <?php foreach ($productsList as $product) : ?>

        <?php if ($product->category->pet == 'Cani') : ?>

            <?php if ($product->type == 'toy') : ?>

                <p><?= $product->getName() ?></p>

            <?php endif ?>

            <?php if ($product->type == 'food') : ?>
                <p><?= $product->getName() ?></p>
            <?php endif ?>

        <?php endif ?>

    <?php endforeach; ?>

</body>

</html>