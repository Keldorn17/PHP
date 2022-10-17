<?php
    //adatbázisból kapjuk  itt az adatokat
    $diakok=[
        [
        "nev"=>"Gyula",
        "szak"=>"Szoftverfejlesztő",
        "szev"=>2002
        ],
        [
        "nev"=>"Peti",
        "szak"=>"Művészetek",
        "szev"=>2001
        ],
        [
        "nev"=>"Anna",
        "szak"=>"Női szabó",
        "szev"=>2003
        ]
    ];
    $strTbl = "";
    foreach($diakok as $diak){
        //print_r($diak);
        //echo $diak['nev'];
        $strTbl.="
        <tr>
            <td>{$diak['nev']}</td>
            <td>{$diak['szak']}</td>
            <td>{$diak['szev']}</td>
        </tr>";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Név</th>
                <th>Szak</th>
                <th>Születési éve</th>
            </tr>
        </thead>
        <tbody><?=$strTbl?></tbody>
    </table>
</body>
</html>