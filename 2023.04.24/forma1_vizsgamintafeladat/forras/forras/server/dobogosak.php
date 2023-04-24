<?php
    require_once 'configDB.php';
    extract($_GET);
    $sql = "SELECT eredmenyek.nagydij, eredmenyek.helyezes, pilotak.vezeteknev, pilotak.keresztnev FROM eredmenyek, pilotak WHERE eredmenyek.pilotaid = pilotak.id AND eredmenyek.helyezes <= 3 ORDER BY eredmenyek.nagydij, eredmenyek.helyezes";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>