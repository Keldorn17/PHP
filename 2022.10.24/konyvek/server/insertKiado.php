<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    extract($_POST);
    $sql = "Insert into kiado values (null, '{$kiado}','{$hely}')";
    $stmt = $db -> exec($sql);
    if($stmt)
        echo 'Sikeres adatbeírás';
    else
        echo 'Sikertelen adatbevitel';
?>