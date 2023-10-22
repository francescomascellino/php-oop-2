<?php

//DEBUGGER
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../Database/db.php';

include __DIR__ . '/head.php';

?>

<body>

    <div class="container">

        <h2 class="text-center my-3">Gatti</h2>

        <!-- SAREBBE ANCHE POSSIBILE CREARE ULTERIORI 3 PARZIALI SEPARATI CONTENENTI LE SEZIONI PER OGNI PRODOTTO RELATIVO ALL'ANIMALE DI RIFERIMENTO -->

        <!-- INIZIO SEZIONE -->
        <h3 class="my-3">Giochi</h3>

        <div class="row g-3 mb-3">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Gatti' && $product->type == 'toy') : ?>

                    <div class="col-4">

                        <div class="card shadow">

                            <div class="img-container position-relative">
                                <img src="https://picsum.photos/id/1025/200" class="card-img-top" alt="<?= $product->getName() ?>">
                                <div class="icon-container position-absolute top-0 start-0">
                                    <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                                </div>
                            </div>

                            <div class="card-body">

                                <h5><?= $product->getName() ?></h5>

                                <p class="mb-1"><strong>Gioco</strong></p>

                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div> <!-- FINE SEZIONE -->

        <!-- INIZIO SEZIONE -->
        <h3 class="my-3">Cibo</h3>

        <div class="row g-3 mb-3">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Gatti' && $product->type == 'food') : ?>

                    <div class="col-4">

                        <div class="card shadow">

                            <div class="img-container position-relative">
                                <img src="https://picsum.photos/id/1025/200" class="card-img-top" alt="<?= $product->getName() ?>">
                                <div class="icon-container position-absolute top-0 start-0">
                                    <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                                </div>
                            </div>

                            <div class="card-body">

                                <h5><?= $product->getName() ?></h5>

                                <p class="mb-1"><strong>Cibo</strong></p>

                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                <p class="mb-1"><strong>Calorie: </strong><?= $product->getCalories() ?>cal</p>
                                <p class="mb-1"><strong>Alimento adatto a: </strong><?= $product->getAge() ?></p>
                                <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div> <!-- FINE SEZIONE -->

        <!-- INIZIO SEZIONE -->
        <h3 class="my-3">Letti e Cuccette</h3>

        <div class="row g-3 mb-3">

            <?php foreach ($productsList as $product) : ?>

                <?php if ($product->category->pet == 'Gatti' && $product->type == 'kennel') : ?>

                    <div class="col-4">

                        <div class="card shadow">

                            <div class="img-container position-relative">
                                <img src="https://picsum.photos/id/1025/200" class="card-img-top" alt="<?= $product->getName() ?>">
                                <div class="icon-container position-absolute top-0 start-0">
                                    <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5><?= $product->getName() ?></h5>

                                <p class="mb-1"><strong>Cuccia</strong></p>

                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                                <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                                <p class="mb-1"><strong>Misure: </strong><?= $product->getMesurements() ?></p>
                                <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                                <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                                <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                                <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                            </div>

                        </div>

                    </div>

                <?php endif ?>

            <?php endforeach; ?>

        </div> <!-- FINE SEZIONE -->

    </div>

</body>

</html>