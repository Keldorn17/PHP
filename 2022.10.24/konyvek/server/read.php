<?php
    require_once "configDB.php";
    $sql = "SELECT * FROM konyvek ORDER BY cim";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>