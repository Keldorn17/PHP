<?php
require_once "configDb.php";
extract($_GET);
$sql = "SELECT munkalatok.telepules, munkasok.nev ,SUM(munkalatok.anyagar) as 'anyagar', SUM(munkalatok.munkaora) as 'munkaora' FROM munkalatok, munkasok WHERE munkalatok.maz = munkasok.az GROUP BY munkalatok.telepules, munkasok.nev ORDER BY munkalatok.telepules, munkasok.nev;";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());
?>