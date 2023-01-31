<?php
    session_start();
    require_once 'configDB.php';
    include_once 'Product.class.php';
    include_once 'Cart.class.php';

    $cart = new Cart();
    extract($_POST);
    $tot = $cart->totalPrice();
    $sql = "INSERT INTO customers (username, email, phone, address) VALUES ('{$username}', '{$email}', '{$phone}', '{$address}');";

    try {
        $stmt1 = $db->exec($sql);
        $customerId = $db->lastInsertId();
        $date = date("Y-m-d");
        $sql = "INSERT INTO orders (customer_id, total, status) VALUES ({$customerId}, {$tot}, '{$date}');";
        $stmt2 = $db->exec($sql);
        $orderId = $db->lastInsertId();
        $sql = "";
        foreach($_SESSION['cart'] as $key => $value) {
            extract($value);
            $sql .= "INSERT INTO order_items VALUES (null, {$orderId}, {$id}, {$quantity});";
        }
        $stmt3 = $db->exec($sql);
        //Sikeres:
        unset($_SESSION['cart']);
        unset($_SESSION['totQty']);
        echo json_encode(["msg" => "Sikeres Rendelés! Rendelés Azonosítója: {$orderId}"]);
    } catch(Exception $e) {
        echo json_encode(["msg" => "Sikertelen Rendelés! Hiba: ".$e]);
    }


?>