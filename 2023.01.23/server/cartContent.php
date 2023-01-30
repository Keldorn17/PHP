<?php
session_start();
//include_once 'Product.class.php';
//include_once 'Cart.class.php';
//$cart = new Cart();
if (isset($_SESSION['cart']) && $_SESSION['totQty'] > 0)
    echo json_encode($_SESSION['cart']);
else
    echo json_encode(["error" => true]);
?>