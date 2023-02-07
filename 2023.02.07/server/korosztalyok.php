<?php
    require_once 'db.php';
    extract($_GET);
    $sql = "SELECT YEAR(vizsgak.idopont) - jelentkezesek.szulev as 'eletkor', COUNT(jelentkezesek.jid) as 'vizsgazok' FROM jelentkezesek, vizsgak WHERE jelentkezesek.vizsgaid = vizsgak.vid GROUP BY YEAR(vizsgak.idopont) - jelentkezesek.szulev;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>