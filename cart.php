<?php
require 'inc/head.php';
require 'inc/data/products.php';

session_start(); // démarre la session

if (isset($_POST['clear'])) {
    session_destroy(); // détruit toutes les données associées à la session en cours
    header('Location: index.php'); // redirige l'utilisateur vers la page d'accueil
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] ?? [] as $id => $cookie) { ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                <figcaption class="caption">
                    <h3><?= $cookie['name']; ?></h3>
                    <p><?= $cookie['description']; ?></p>
                </figcaption>
            </figure>
        </div>
        <?php } ?>
    </div>
    <form method="post">
        <button class="btn btn-primary" type="submit" name="clear">Clear all items</button>
    </form>
</section>

<?php require 'inc/foot.php'; ?>