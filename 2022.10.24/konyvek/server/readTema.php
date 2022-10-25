<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT tema FROM konyvek GROUP BY tema ORDER BY tema";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>