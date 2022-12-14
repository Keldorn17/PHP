<?php
require_once 'configDB.php';

try{
    $sql = "SELECT * FROM todos ORDER BY timestamp desc";
    $stmt = $db ->query($sql);
    echo json_encode($stmt->fetchAll());
}catch(PDOException $e){
    echo json_encode(["error"=>$e->getMessage()]);
}

?>