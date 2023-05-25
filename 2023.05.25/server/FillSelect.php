<?php
    require_once 'configDB.php';
    extract($_GET);
    $sql = "SELECT nagydij FROM eredmenyek GROUP BY nagydij;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>