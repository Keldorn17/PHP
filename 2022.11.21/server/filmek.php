<?php
require_once "db.php";
extract($_GET);
$sql = "SELECT cim,kiadasiev, kocka FROM film WHERE kiadoid=$id;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>