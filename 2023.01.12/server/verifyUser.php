<?php
    session_start();
    require_once "configDb.php";
    extract($_GET);
    if (isset($_GET['username'])) 
        $sql = "SELECT COUNT(*) nr FROM users WHERE username = '$username';";
    else
        $sql = "SELECT COUNT(*) nr FROM users WHERE email = '$email';";
    try{
        $stmt = $db->query($sql);
        echo json_encode($stmt->fetch());
    }catch(exception $e){
        echo json_encode(["msg" => "Nem sikerült a regisztráció! Hiba: {$e}"]);
    }
?>