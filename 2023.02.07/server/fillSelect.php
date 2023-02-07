<?php
    require_once 'db.php';
    extract($_GET);
    $sql = "SELECT vizsgak.nyelv FROM vizsgak GROUP BY vizsgak.nyelv;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>