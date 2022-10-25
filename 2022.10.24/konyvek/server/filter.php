<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    if(isset($_GET['tema'])){
        $kulcs = $_GET['tema'];
        $sql = "SELECT * FROM konyvek WHERE tema='{$kulcs}' ORDER BY id";
    }
    if(isset($_GET['szerzo'])){
        $kulcs = $_GET['szerzo'];
        $sql = "SELECT * FROM konyvek WHERE szerzo='{$kulcs}' ORDER BY id";
    }
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>