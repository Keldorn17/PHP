<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "SELECT tazon, nev FROM tanulok WHERE osztaly = '{$osztaly}' ORDER BY tazon;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>