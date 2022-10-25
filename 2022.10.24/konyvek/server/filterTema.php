<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $tema = $_GET['tema'];
    $sql = "SELECT * FROM konyvek WHERE tema='{$tema}' ORDER BY id";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>