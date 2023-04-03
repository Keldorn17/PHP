<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT id, name, img_url FROM products;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>