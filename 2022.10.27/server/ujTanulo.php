<?php
    require_once "configDB.php";
    extract($_POST);
    $sql = "INSERT INTO tanulok VALUES (null,'{$nev}','{$oszt}')";
    try{
        $stmt = $db->exec($sql);
        $tazon = $db->lastInsertId();
        echo json_encode(["msg"=>"Sikeres mentés, a tanuló azonosítója: ".$tazon]);
    }catch(PDOException $e){
        echo json_encode(["msg"=>"Nem sikerült a mentés".$e->getMessage()]);
    }

?>