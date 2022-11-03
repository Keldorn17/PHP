<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "SELECT leadasok.idopont, leadasok.mennyiseg FROM leadasok, tanulok WHERE leadasok.tanulo = tanulok.tazon AND tanulok.nev = '{$nev}';";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>