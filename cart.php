<?php
include_once "product.php";
include_once "session.php";
session_start();

if (isset($_SESSION['sessionObj'])) {
    $products = $_SESSION['sessionObj']->GetCart();
    foreach ($products as $prod) {
        echo "<p>{$prod->getProduct()}</p>";
    }
}