<?php
    require_once "configDB.php";
    extract($_POST);
    $sql = "INSERT INTO todo VALUES (null,'{$content}','1')";
    try{
        $stmt = $db->exec($sql);
        $id = $db->lastInsertId();
        echo json_encode(["msg"=>"Sikeres mentés ".$id]);
    }catch(PDOException $e){
        echo json_encode(["msg"=>"Nem sikerült a mentés".$e->getMessage()]);
    }
?>