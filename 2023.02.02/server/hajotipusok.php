<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT nev, utas, dij FROM hajo WHERE tipus = {$tipus} ORDER BY nev;";
    $stmt = $db->query($sql);
    echo json_encode($stmt -> fetchAll());
?>