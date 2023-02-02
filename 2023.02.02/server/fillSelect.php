<?php
require_once "db.php";
extract($_GET);
$sql = "SELECT tipus FROM hajo GROUP BY tipus;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>