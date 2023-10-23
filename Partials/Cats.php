<h2 class="text-center my-3">Gatti</h2>

<div class="row g-3 mb-3">

    <?php foreach ($productsList as $product) : ?>

        <?php if ($product->category->pet == 'Gatti') : ?>

            <div class="col-4">

                <div class="card shadow">

                    <div class="img-container position-relative">
                        <img src="https://picsum.photos/200?<?= rand(1, 99) ?>" class="card-img-top" alt="<?= $product->getName() ?>">
                        <div class="icon-container position-absolute top-0 start-0">
                            <h1 class="text-light p-2"><?= $product->category->getIcon() ?></h1>
                        </div>
                    </div>

                    <div class="card-body">

                        <?php if ($product->getType() == 'toy') : ?>
                            <h5><?= $product->getName() ?></h5>

                            <p class="mb-1"><strong>Gioco</strong></p>

                            <!-- SE IL VALORE DI SCONTO E' POSITIVO -->
                            <?php if ($product->getDiscountValue() > 0) : ?>
                                <p class="mb-1"><strong>Prezzo: </strong>
                                    <span class="text-decoration-line-through"><?= $product->getPrice() ?>€</span>
                                    <?= $product->setDiscount() ?>€
                                    <span class="badge text-bg-success">-<?= $product->getDiscountValue() ?>% !</span>
                                </p>

                                <!-- ALTRIMENTI PREZZO PIENO -->
                            <?php else : ?>
                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                            <?php endif ?>

                            <p class="mb-1"><strong>Colore: </strong><?= $product->getColor() ?></p>
                            <p class="mb-1"><strong>Materiale: </strong><?= $product->getMaterial() ?></p>
                            <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                            <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>

                        <?php endif ?>

                        <?php if ($product->getType() == 'food') : ?>
                            <h5><?= $product->getName() ?></h5>

                            <p class="mb-1"><strong>Cibo</strong></p>

                            <!-- SE IL VALORE DI SCONTO E' POSITIVO -->
                            <?php if ($product->getDiscountValue() > 0) : ?>
                                <p class="mb-1"><strong>Prezzo: </strong>
                                    <span class="text-decoration-line-through"><?= $product->getPrice() ?>€</span>
                                    <?= $product->setDiscount() ?>€
                                    <span class="badge text-bg-success">-<?= $product->getDiscountValue() ?>% !</span>
                                </p>

                                <!-- ALTRIMENTI PREZZO PIENO -->
                            <?php else : ?>
                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                            <?php endif ?>

                            <p class="mb-1"><strong>Peso: </strong><?= $product->getWeight() ?>Kg</p>
                            <p class="mb-1"><strong>Calorie: </strong><?= $product->getCalories() ?>cal</p>
                            <p class="mb-1"><strong>Alimento adatto a: </strong><?= $product->getAge() ?></p>
                            <p class="mb-1"><strong>In magazzino: </strong><?= $product->getStock() ?> pz</p>
                            <p class="mb-1"><strong>Codice Prodotto: </strong><?= $product->getCode() ?></p>
                        <?php endif ?>

                        <?php if ($product->getType() == 'kennel') : ?>
                            <h5><?= $product->getName() ?></h5>

                            <p class="mb-1"><strong>Cuccia</strong></p>

                            <!-- SE IL VALORE DI SCONTO E' POSITIVO -->
                            <?php if ($product->getDiscountValue() > 0) : ?>
                                <p class="mb-1"><strong>Prezzo: </strong>
                                    <span class="text-decoration-line-through"><?= $product->getPrice() ?>€</span>
                                    <?= $product->setDiscount() ?>€
                                    <span class="badge text-bg-success">-<?= $product->getDiscountValue() ?>% !</span>
                                </p>

                                <!-- ALTRIMENTI PREZZO PIENO -->
                            <?php else : ?>
                                <p class="mb-1"><strong>Prezzo: </strong><?= $product->getPrice() ?>€</p>
                            <?php endif ?>

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