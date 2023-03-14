<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT orszag FROM `hatar` GROUP BY orszag;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>