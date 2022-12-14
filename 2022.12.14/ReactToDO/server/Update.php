<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "UPDATE todos SET status = not status WHERE id = $id;";
    try{
        $stmt = $db ->query($sql);
        echo json_encode(["msg" => "sikerült a modosítás..."]);
    }catch(PDOException $e){
        echo json_encode(["msg" => "hiba nem sikerült a modosítás...".$e->getMessage()]);
    }

?>