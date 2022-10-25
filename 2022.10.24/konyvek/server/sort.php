<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    if(isset($_GET['tema'])){
        $kulcs = $_GET['tema'];
        $sql = "SELECT * FROM konyvek ORDER BY tema";
    }
    if(isset($_GET['szerzo'])){
        $kulcs = $_GET['szerzo'];
        $sql = "SELECT * FROM konyvek ORDER BY szerzo";
    }
    if(isset($_GET['id'])){
        $kulcs = $_GET['id'];
        $sql = "SELECT * FROM konyvek ORDER BY id";
    }
    if(isset($_GET['cim'])){
        $kulcs = $_GET['cim'];
        $sql = "SELECT * FROM konyvek ORDER BY cim";
    }
    if(isset($_GET['ev'])){
        $kulcs = $_GET['ev'];
        $sql = "SELECT * FROM konyvek ORDER BY ev";
    }
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>