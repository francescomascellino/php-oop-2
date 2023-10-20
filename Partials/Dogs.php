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