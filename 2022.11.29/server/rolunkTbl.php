<?php
require_once "configDb.php";
$sql = "SELECT nev, year(now()) - kezdev as 'regiseg' FROM munkasok ORDER BY regiseg DESC;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>