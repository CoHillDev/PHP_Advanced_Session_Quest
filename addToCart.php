<?php
// session_start(); // démarre la session
// require 'inc/data/products.php'; // inclut le catalogue des produits
// if (isset($_GET['add_to_cart'])) { // vérifie si le paramètre add_to_cart est présent dans l'URL
//     $product_id = $_GET['add_to_cart']; // récupère l'identifiant du produit ajouté
//     $_SESSION['cart'][] = $catalog[$product_id]; // ajoute le produit au panier (dans les données de session)
// }
?>

<?php
session_start(); // démarre la session
require 'inc/data/products.php'; // inclut le catalogue des produits
require 'cart.php';


if (isset($_GET['add_to_cart'])) {
    $productId = $_GET['add_to_cart'];

    // Check if the product exists in the catalog
    if (isset($catalog[$productId])) {

        // If the product doesn't exist in the cart, set its quantity to 1
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = array(
                'name' => $catalog[$productId]['name'],
                'quantity' => 1
            );
        }
        // If the product exists in the cart, increase its quantity by 1
        else {
            $_SESSION['cart'][$productId]['quantity']++;
        }
    }
}
?>



<?php
session_start();
/* Initialisation du panier, on utilise les session pour garder le panier en mémoire*/
$_SESSION['cart'] = array('id', 'name', 'description');
//$_SESSION['cart'] = ['id', 'name', 'description'];

/* Subdivision du panier */
$_SESSION['cart']['name'] = array();
$_SESSION['cart']['description'] = array();
//$_SESSION['cart']['quantity'] = array();

$_SESSION['name'] = 'TRYING';
setcookie("name", '');

echo $_SESSION["name"];

array_push($_SESSION['cart']['name']);


<?php
// require 'inc/data/products.php';

// session_start(); // démarre la session

// if (isset($_GET['add_to_cart'])) {
//     $id = $_GET['add_to_cart'];

//     // Vérifie la présence du produit dans le catalogue
//     if (isset($catalog[$id])) {

//         // Ajoute le produit dans le panier
//         if (!isset($_SESSION['cart'][$id])) {
//             $_SESSION['cart'][$id] = array(
//                 'name' => $catalog[$id]['name'],
//                 'quantity' => 1
//             );
//         }
//         // Incrémente la quantité
//         else {
//             $_SESSION['cart'][$id]['quantity']++;
//         }
//     }
// }


session_start();
require 'inc/data/products.php';

if (isset($_POST['add_to_cart'])) {
    //     $productId = $_GET['add_to_cart'];


// if (isset($_GET['add_to_cart'])) {
//     $productId = $_GET['add_to_cart'];

//     // Check if product exists in catalog
//     if (!isset($catalog[$productId])) {
//         header('Location: index.php');
//         exit;
//     }

//     // Add product to cart
//     $_SESSION['cart'][$productId] = [
//         'name' => $catalog[$productId]['name'],
//         'description' => $catalog[$productId]['description'],
//     ];

//     header('Location: index.php');
//     exit;
// }




?>