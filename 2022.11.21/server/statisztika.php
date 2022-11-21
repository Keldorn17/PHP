<?php
require_once "db.php";
$sql = "SELECT kiadasiev,COUNT(kiadasiev) as 'darab' FROM film GROUP BY kiadasiev ORDER BY kiadasiev DESC;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>