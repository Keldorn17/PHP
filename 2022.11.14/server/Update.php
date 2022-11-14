<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "UPDATE `todo` SET `state` = not state WHERE `todo`.`id` = $id;";
    try{
        $stmt = $db ->exec($sql);
    }catch(PDOException $e){
        echo json_encode(["msg" => "hiba nem sikerült a modosítás...".$e->getMessage()]);
    }
    $sql = "SELECT todo.state, todo.content, todo.id FROM todo;";
    try{
        $stmt = $db ->query($sql);
        echo json_encode($stmt->fetchAll());
    }catch(PDOException $e){
        echo json_encode(["msg" => "hiba nem sikerült az olvasás...".$e->getMessage()]);
    }
?>