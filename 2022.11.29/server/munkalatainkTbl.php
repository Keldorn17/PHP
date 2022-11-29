<?php
require_once "configDb.php";
extract($_GET);
$sql = "SELECT munkasok.nev as 'nev', COUNT(munkalatok.telepules) as 'alkalom', SUM(munkalatok.munkaora) as 'munkaora' FROM munkalatok, munkasok WHERE munkalatok.maz = munkasok.az AND munkalatok.telepules = '$telepules' GROUP BY munkasok.nev;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>