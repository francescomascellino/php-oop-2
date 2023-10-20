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

// class Stock
// {
//     public $quantity;

//     // CONTRUSCTOR
//     public function __construct($productQty)
//     {
//         $this->quantity = $productQty;
//     }

//     public function getQty()
//     {
//         return $this->quantity;
//     }
// }

class Product
{
    public $name;
    public $type;
    public $size;
    public $color;
    public $price;

    public function __construct($producName, $productType, $productSize, $productColor, $productPrice)
    {
        $this->name = $producName;
        $this->type = $productType;
        $this->size = $productSize;
        $this->color = $productColor;
        $this->price = $productPrice;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }
}


// PRODUCT[ANIMALE --> CATEGORY(ITEM DATA)]


class Item extends Product
{

    public $stock;

    public function __construct($name, $type, $size, $color, $price, $productStock)
    {
        parent::__construct($name, $type, $size, $color, $price);
        $this->stock = $productStock;
    }
}

$productsList = [];

$kong = new Item('Kong', 'toy', 'small', 'red', 10, 50);

$monge = new Item('Monge', 'food', 'big', null, 50, 100);

array_push($productsList, $kong, $monge);

var_dump($productsList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP -2</title>
</head>

<body>

    <?php foreach ($productsList as $product) : ?>

        <?php if ($product->type == 'toy') : ?>
            <p><?= $product->getName() ?></p>
        <?php endif ?>

        <?php if ($product->type == 'food') : ?>
            <p><?= $product->getName() ?></p>
        <?php endif ?>
    <?php endforeach ?>

</body>

</html>