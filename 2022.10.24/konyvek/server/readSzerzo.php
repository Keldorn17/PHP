<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT szerzo FROM konyvek GROUP BY szerzo ORDER BY szerzo";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>