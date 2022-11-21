<?php
require_once "db.php";
$sql = "SELECT id, nev FROM kiado ORDER BY nev;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>