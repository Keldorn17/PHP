<?php
    require_once 'configDB.php';
    extract($_GET);
    $sql = "SELECT vezeteknev, keresztnev, foto FROM pilotak ORDER BY RAND() LIMIT 6;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>