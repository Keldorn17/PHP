<?php
require_once "db.php";
extract($_GET);
$sql = "SELECT hajo.nev, COUNT(tura.nap) as 'nap', SUM(hajo.dij) as 'ar' FROM hajo, tura WHERE tura.hajo_id = hajo.id GROUP BY hajo.nev ORDER BY SUM(hajo.dij) DESC;";
$stmt = $db->query($sql);
echo json_encode($stmt -> fetchAll());
?>