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

    public function __construct(string $producName, float $productPrice, string $productCode)
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

class Food extends Product
{
    //FROM CLASS Category
    public $category;

    // ISTANCE VARIABLES
    public $weight;
    public $calories;
    public $age;

    public $type = 'food';

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
    public $color;
    public $material;

    public $type = 'kennel';

    public function __construct($productCategory, string $name, float $price, string $code, int $stock, float $productWeigth, float $productHeigth, float $productWidth, float $productLength, string $productColor, string $productMaterial)
    {
        $this->category = $productCategory;

        //PARENT VARIABLES
        parent::__construct($name, $price, $code, $stock);

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

    public function getColor()
    {
        return $this->color;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}

// TOYS
$kong = new Toy($dogCategory, 'Kong', 10.99, '01KONG', 10, 'Rosso', 'Gomma', 'piccola');
$fresbee = new Toy($dogCategory, 'Fresbee', 4, '02FREE', 20, 'Verde', 'Plastica', 'qualsiasi');
$mouse = new Toy($catCategory, 'Topo Giocattolo', 1.50, '03TOPO', 30, 'Grigio/Rosa', 'Tessuto', 'qualsiasi');
$laser = new Toy($catCategory, 'Laser', 8.50, '04LAS', 23, 'Rosso', 'Metallo', 'qualsiasi');



$productsList = [];
array_push($productsList, $kong, $fresbee, $mouse, $laser);

var_dump($productsList);

// die;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 2</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body>


    <div class="container">


        <h1>Gatti</h1>
        <hr>
        <div class="row">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Gatti') : ?>

                    <div class="col">

                        <div class="card">

                            <?php if ($product->type == 'toy') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                            <?php if ($product->type == 'food') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                            <?php if ($product->type == 'kennel') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div>


        <h1>Cani</h1>
        <hr>

        <div class="row">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Cani') : ?>

                    <div class="col">

                        <div class="card">

                            <?php if ($product->type == 'toy') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                            <?php if ($product->type == 'food') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                            <?php if ($product->type == 'kennel') : ?>
                                <p><?= $product->getName() ?></p>
                            <?php endif ?>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div>
    </div>

</body>

</html>