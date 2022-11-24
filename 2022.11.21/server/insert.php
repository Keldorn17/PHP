<?php
    require_once "db.php";
    extract($_POST);
    $sql = "INSERT INTO `kiado` (`id`, `nev`) VALUES (NULL, '{$kiado}')";
    try{
        $stmt = $db->exec($sql);
        $id = $db->lastInsertId();
        echo json_encode(["msg"=>"Sikeres mentés ".$id]);
    }catch(PDOException $e){
        echo json_encode(["msg"=>"Nem sikerült a mentés".$e->getMessage()]);
    }
?>