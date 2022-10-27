<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT tanulok.osztaly FROM tanulok GROUP BY tanulok.osztaly;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>