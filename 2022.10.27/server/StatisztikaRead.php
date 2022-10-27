<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT tanulok.osztaly, SUM(leadasok.mennyiseg) as 'mennyiseg' FROM tanulok, leadasok WHERE tanulok.tazon = leadasok.tanulo GROUP BY tanulok.osztaly;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>