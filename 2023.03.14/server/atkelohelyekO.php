<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT telepules.nev, hatar.szomszed_telepules, hatar.tipus FROM hatar, telepules WHERE telepules.id = hatar.magyar_telepules_id AND hatar.orszag = '{$orszag}'  ORDER BY telepules.nev";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>