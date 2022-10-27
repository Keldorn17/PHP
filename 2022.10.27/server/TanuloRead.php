<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "SELECT tanulok.tazon, tanulok.nev FROM tanulok WHERE osztaly = '{$osztaly}' ORDER BY tanulok.tazon;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>