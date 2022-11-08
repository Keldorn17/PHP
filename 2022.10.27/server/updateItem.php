<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "UPDATE leadasok SET mennyiseg = ${mennyiseg} WHERE leadasok.sorsz = ${sorsz};";
    //$stmt = $db->exec($sql);
    try{
        $stmt = $db ->exec($sql);
    }catch(PDOException $e){
        echo json_encode(["msg" => "hiba nem sikerült a modosítás...".$e->getMessage()]);
    }
    $sql = "SELECT leadasok.idopont, leadasok.mennyiseg, leadasok.sorsz FROM leadasok, tanulok WHERE leadasok.tanulo = tanulok.tazon AND tanulok.nev = '{$nev}';";
    try{
        $stmt = $db ->query($sql);
        echo json_encode($stmt->fetchAll());
    }catch(PDOException $e){
        echo json_encode(["msg" => "hiba nem sikerült az olvasás...".$e->getMessage()]);
    }
    
    
    /*if($stmt){
        $sql = "SELECT leadasok.idopont, leadasok.mennyiseg, leadasok.sorsz FROM leadasok, tanulok WHERE leadasok.tanulo = tanulok.tazon AND tanulok.nev = '{$nev}';";
        $stmt = $db->query($sql);
        echo json_encode($stmt->fetchAll());
    }else{
        echo json_encode(["msg" => "hiba nem sikerült az olvasás"]);
    }*/
?>