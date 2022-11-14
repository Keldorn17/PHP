<?php
    header('Access-Control-Allow-Origin: *');
    require_once "configDB.php";
    $sql = "SELECT todo.state, todo.content, todo.id FROM todo;";
    $stmt = $db->query($sql);
    echo json_encode($stmt->fetchAll());
?>