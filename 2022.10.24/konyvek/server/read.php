<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT * FROM konyvek ORDER BY id";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>