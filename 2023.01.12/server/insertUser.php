<?php
    session_start();
    require_once "configDb.php";
    extract($_POST);
    $pw = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$pw');";
    try{
        $stmt = $db->exec($sql);
        echo json_encode(["msg" => "Sikeres regisztráció! Azonosítója:{$db->lastInsertId()}"]);
    }catch(exception $e){
        echo json_encode(["msg" => "Nem sikerült a regisztráció! Hiba: {$e}"]);
    }

?>