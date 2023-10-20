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

// FOOD
$mongee = new Food($dogCategory, 'Mongee', 52, '05MONGE', 35, 15, 250, "Adulti");
$oasy = new Food($dogCategory, 'Oasy', 14.65, '06OASY', 42, 2.5, 120, 'Cuccioli');
$almonature = new Food($catCategory, 'Almo Nature', 49.90, '07ALMO', 9, 12, 140, 'Cuccioli');
$exclusion = new Food($catCategory, 'Exclusion', 17, '08EXCLU', 17, 1.5, 158, 'Adulti');

// KENNEL
$woodKennel = new Kennel($dogCategory, 'Cuccia in Legno Classica', 150, '09WOOD', 2, 60, 80, 50, 100, 'Noce', 'Legno');
$fluffyBed = new Kennel($dogCategory, 'Letto Morbido Fluffy', 15, '10FLUFFY', 15, 3, 30, 50, 100, 'Bianco', 'Tassuto/Memory Foam');
$mochi = new Kennel($catCategory, 'Letto Mochi', 24.99, '11MOCHI', 5, 2.5, 25, 55, 55, 'Grigio Chiaro', 'Tessuto/Peluche');
$mupfel = new Kennel($catCategory, 'Letto Mupfel', 26.99, '12MUPFE', 8, 2, 35, 50, 50, 'Beije/Marrone', 'Poliestere');



$productsList = [];
array_push($productsList, $kong, $fresbee, $mouse, $laser, $mongee, $oasy, $almonature, $exclusion, $woodKennel, $fluffyBed, $mochi, $mupfel);

// var_dump($productsList);

// die;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP - 2</title>

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <header>
        <h1 class="text-center my-4">Il Meglio per i nostri amici animali</h1>
    </header>


    <div class="container">

        <h2 class="text-center my-3">Gatti</h2>

        <div class="row g-3 mb-3">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Gatti') : ?>

                    <div class="col-4">

                        <div class="card shadow" style="height: 700px;">

                            <div class="img-container position-relative">
                                <img src="https://picsum.photos/200" class="card-img-top" alt="<?= $product->getName() ?>">
                                <div class="icon-container position-absolute top-0 start-0">
                                    <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                                </div>
                            </div>

                            <div class="card-body">

                                <?php if ($product->type == 'toy') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                    <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                                <?php endif ?>

                                <?php if ($product->type == 'food') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                    <p class="mb-1"><strong>Calorie: </strong><?= $product->getCalories() ?>cal</p>
                                    <p class="mb-1"><strong>Alimento adatto a: </strong><?= $product->getAge() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>
                                <?php endif ?>

                                <?php if ($product->type == 'kennel') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                    <p class="mb-1"><strong>Misure: </strong><?= $product->getMesurements() ?></p>
                                    <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                    <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>
                                <?php endif ?>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div>

        <h2 class="text-center my-3">Cani</h2>

        <div class="row g-3 mb-3">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Cani') : ?>

                    <div class="col-4">

                        <div class="card shadow" style="height: 700px;">

                            <div class="img-container position-relative">
                                <img src="https://picsum.photos/200" class="card-img-top" alt="<?= $product->getName() ?>">
                                <div class="icon-container position-absolute top-0 start-0">
                                    <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                                </div>
                            </div>

                            <div class="card-body">

                                <?php if ($product->type == 'toy') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                    <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                                <?php endif ?>

                                <?php if ($product->type == 'food') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                    <p class="mb-1"><strong>Calorie: </strong><?= $product->getCalories() ?>cal</p>
                                    <p class="mb-1"><strong>Alimento adatto a: </strong><?= $product->getAge() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>
                                <?php endif ?>

                                <?php if ($product->type == 'kennel') : ?>
                                    <h5><?= $product->getName() ?></h5>

                                    <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                    <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                    <p class="mb-1"><strong>Misure: </strong><?= $product->getMesurements() ?></p>
                                    <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                    <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                    <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                    <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>
                                <?php endif ?>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div>

    </div>

</body>

</html>