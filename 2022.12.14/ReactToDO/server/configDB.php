<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, PUT, OPTIONS, PATCH, DELETE');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Authorization, Content-Type, x-xsrf-token, x_csrftoken, Cache-Control, X-Requested-With');

    $host = "localhost";
    $db_name = "todo";
    $db_username = "root";
    $db_password = "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    try{
        $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $db_username, $db_password,$options);
    }catch(PDOException $e){
        echo "hiba-sikertelen adatbázis kapcsolódás:".$e->getMessage();
    }
?>