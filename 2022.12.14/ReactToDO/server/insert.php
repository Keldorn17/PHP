<?php
    require_once "configDB.php";
    extract($_POST);
    try{
        $sql = "INSERT INTO todos (name) VALUES ('{$newTodo}')";
        $stmt = $db->query($sql);
        $id = $db->lastInsertId();
        echo json_encode(["msg"=>"Sikeres mentés ".$id]);
    }catch(PDOException $e){
        echo json_encode(["msg"=>"Nem sikerült a mentés".$e->getMessage()]);
    }
?>