<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT nev, osztaly FROM tanulok ORDER BY nev;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>