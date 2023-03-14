<?php
    require_once "db.php";
    extract($_GET);
    $sql = "SELECT telepules.megye, hatar.tipus, hatar.orszag FROM hatar, telepules WHERE telepules.id = hatar.magyar_telepules_id GROUP BY telepules.megye, hatar.tipus ORDER BY telepules.megye";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>