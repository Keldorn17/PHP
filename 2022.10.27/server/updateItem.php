<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "UPDATE leadasok SET mennyiseg = ${mennyiseg} WHERE leadasok.sorsz = ${sorsz};";
    $stmt = $db->exec($sql);
    if($stmt){
        $sql = "SELECT leadasok.idopont, leadasok.mennyiseg, leadasok.sorsz FROM leadasok, tanulok WHERE leadasok.tanulo = tanulok.tazon AND tanulok.nev = '{$nev}';";
        $stmt = $db->query($sql);
        echo json_encode($stmt->fetchAll());
    }else{
        echo json_encode(["msg" => "hiba nem sikerült a törlés"]);
    }
?>