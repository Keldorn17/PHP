<?php
    require_once 'db.php';
    extract($_GET);
    $sql = "SELECT COUNT(jelentkezesek.jid) as 'nr', vizsgak.nyelv, vizsgak.szint FROM vizsgak, jelentkezesek WHERE vizsgak.vid = jelentkezesek.vizsgaid GROUP BY vizsgak.nyelv, vizsgak.szint;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>