<?php

session_start(); // démarre la session

require 'inc/data/products.php';

if (isset($_GET['add_to_cart'])) {
    $id = $_GET['add_to_cart'];

    //Ajoute le produit au panier
    $_SESSION['cart'][$id] = [
        'name' => $catalog[$id]['name'],
        'description' => $catalog[$id]['description'],
        'image' => $catalog[$id]['image'],
    ];
    header("Location: cart.php"); //Redirige l'utilisateur vers le panier
}
require 'inc/head.php'; ?>

<section class="cookies container-fluid" method='POST' action="<?= $_SERVER['PHP_SELF'] ?>">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>