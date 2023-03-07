<?php
    require_once 'db.php';

    $file = new SplFileObject('./autok1sorban.txt');

    $sql = "
    CREATE TABLE cars (
        id int(11) NOT NULL auto_increment,
        name varchar(50) NOT NULL,
        age int(4) NOT NULL,
        doors int(1) NOT NULL,
        color varchar(30) NOT NULL,
        primary key(id)
    )
    ";
    //$stmt = $db->exec($sql);
    
    $lineCount = 0;
    while (!$file->eof()) {
        $lineCount++;
        $line = $file->fgets();
        echo $line;
        echo "<br>";
        list($name, $age, $doors, $color) = explode(';', $line);
        $sql = "INSERT INTO cars VALUES (null, '{$name}', {$age}, {$doors}, '{$color}');";
        $stmt = $db->exec($sql);
    }
    echo 'Sorok száma: '.$lineCount;
?>