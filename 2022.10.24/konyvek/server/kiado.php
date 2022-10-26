<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "SELECT * FROM kiado where kod = '{$kod}'";
    $stmt = $db -> query($sql);
    echo json_encode($stmt->fetch());
?>