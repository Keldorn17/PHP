<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_GET);
    $sql = "DELETE FROM kiado WHERE kod='{$kod}'";
    $stmt = $db -> exec($sql);
    if($stmt)
        echo json_encode(array("msg"=>"Sikerült a törlés"));
    else
        echo json_encode(array("msg"=>"Sikertelen a törlés"));
?>