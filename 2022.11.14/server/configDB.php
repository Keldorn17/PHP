<?php
    include 'env.php';

    $host = "localhost";
    $db_name = $_ENV['MYSQL_DATABASE'] ? $_ENV['MYSQL_DATABASE'] : "todo2";
    $db_username = $_ENV['MYSQL_USERNAME'] ? $_ENV['MYSQL_USERNAME'] : "root";
    $db_password = $_ENV['MYSQL_PASSWORD'] ? $_ENV['MYSQL_PASSWORD'] : "";
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