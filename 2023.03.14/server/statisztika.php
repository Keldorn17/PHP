<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT orszag, tipus, COUNT(id) AS count FROM `hatar` GROUP BY tipus, orszag ORDER BY orszag";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>