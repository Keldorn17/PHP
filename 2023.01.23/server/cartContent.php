<?php
session_start();
//include_once 'Product.class.php';
//include_once 'Cart.class.php';
//$cart = new Cart();
echo json_encode($_SESSION['cart']);
?>