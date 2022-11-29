<?php
require_once "configDb.php";
$sql = "SELECT telepules FROM munkalatok GROUP BY telepules;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>