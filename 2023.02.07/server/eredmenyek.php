<?php
    require_once 'db.php';
    extract($_GET);
    $sql = "SELECT IF(jelentkezesek.eredmeny > 50, 'sikeres vizsga', 'sikertelen vizsga') as 'eredmeny', COUNT(jelentkezesek.jid) as 'letszam' FROM jelentkezesek, vizsgak WHERE vizsgak.vid = jelentkezesek.vizsgaid AND vizsgak.nyelv = '{$nyelv}' GROUP BY IF(jelentkezesek.eredmeny > 60, 'sikeres vizsga', 'sikertelen vizsga')";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>