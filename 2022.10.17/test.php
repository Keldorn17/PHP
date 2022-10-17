<?php
    echo "ok";
    $a = 11;
    // primitiv adatokat kiíratása : 
    echo "<br>";
    echo 'a változó értéke: '.$a; 
    echo "<br>";
    echo "a változó: {$a}";
    echo "<br>";
    echo 'a változó: {$a}';
    echo "<br>";
    var_dump($a);
    echo "<br>";
    $b = "alma";
    var_dump($b);

    //php tömb:
    $tomb = [1,2,3,4];
    $arr = array('e','f','aaa');
    echo "<br>";
    print_r($tomb);
    echo "<br>";
    echo gettype($tomb);
    echo "\na tömb első eleme:{$tomb[0]}";
    echo "<br>";
    //fögvény létrehozása:
    function paritas($v){
        return $v % 2 == 0 ? "páros" : "páratlan";
    };

    //tömb bejárása:
    echo "\nTömb bejárás: ";
    foreach($tomb as $ertek){
        echo $ertek.', ';
    };

    //tömb hossza
    echo "<br>";
    echo "Tömb hossza:".count($tomb);

    //asszociativ tömb:
    $diakok = [
        "Gyula" => 5,
        "Ann" => 3,
        "Peti" => 4
    ];
    echo "<br>Kulcs érték párok kiíratása:<br>";
    foreach($diakok as $kulcs => $ertek){
        echo "{$kulcs} jegy: {$ertek}<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tesztelés</h1>
    <p>HTML-be írt php változó: <?=$a?></p>
    <div>HTML-ből hívott php fügvény-paritás vizsgálat: <?=paritas($a)?></div>
</body>
</html>