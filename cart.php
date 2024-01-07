<?php
require 'inc/head.php';
require 'inc/data/products.php';

session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {

    foreach ($_SESSION['cart'] as $cookie) {
        $productId = array_search($cookie, $catalog);

        echo '<h3>' . $cookie['name'] . '</h3>';
    }
} else {
    echo '<p>Votre panier est vide.</p>';
}
?>

<?php require 'inc/foot.php'; ?>