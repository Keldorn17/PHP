<?php
require_once "db.php";
extract($_GET);
$sql = "SELECT nev, tipus, utas, ROUND(dij/utas) as 'ar' FROM hajo ORDER BY nev;";
$stmt = $db->query($sql);
echo json_encode($stmt -> fetchAll());
?>