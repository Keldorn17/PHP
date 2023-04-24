<?php
    require_once 'configDB.php';
    extract($_GET);
    $sql = "SELECT pilotak.foto, eredmenyek.helyezes, pilotak.vezeteknev, pilotak.keresztnev FROM eredmenyek, pilotak WHERE eredmenyek.pilotaid = pilotak.id AND eredmenyek.nagydij = '{$nagydij}' ORDER BY eredmenyek.helyezes;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>