<h1><?= $title ?></h1>

<img src="<?= $product->getPicture() ?>" alt="<?= $product->getTitle() ?>">

<div>
    <p>Nom: <?= $product->getTitle() ?></p>
    <p>Description: <?= $product->getDescription() ?></p>
    <p>Prix: <?= $product->getPrice() ?></p>
</div>
