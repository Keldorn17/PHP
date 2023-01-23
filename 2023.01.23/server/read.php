<?php
session_start();
require_once 'configDB.php';
$sql = "SELECT * FROM products ORDER BY name";
try{
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
}catch(Exception $e){
    echo json_encode(["msg" => "Sikertelen adatbázis kapcsolódás! Hiba: {$e}"]);
}

?>