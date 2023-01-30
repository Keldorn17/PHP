<?php
    session_start();
    require_once 'configDB.php';
    include_once 'Product.class.php';
    include_once 'Cart.class.php';

    $cart = new Cart();
    extract($_GET);
    $cart->updateQuantity($id, $qty);

    $_SESSION['totQty'] = $cart->getQuantitiy();
    //echo json_encode($_SESSION['cart']);
    echo json_encode(['msg' => 'Sikeres módosítás!']);
?>