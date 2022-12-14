<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "DELETE FROM todos WHERE id = $id";
    $stmt = $db->exec($sql);
    if($stmt){
        $sql = "SELECT todo.state, todo.content, todo.id FROM todo;";
        $stmt = $db->query($sql);
        echo json_encode($stmt->fetchAll());
    }else{
        echo json_encode(["msg" => "hiba nem sikerült a törlés"]);
    }
?>