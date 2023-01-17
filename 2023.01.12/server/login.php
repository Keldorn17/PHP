<?php
    session_start();
    require_once "configDb.php";
    extract($_POST);
    $sql = "SELECT username un, password pw FROM users WHERE username = '{$username}';";
    try{
        $stmt = $db->query($sql);
        if ($stmt->rowCount() == 1){    
            $row = $stmt->fetch();
            extract($row);
            $isValid = password_verify($password, $pw);
            if ($isValid){
                $_SESSION["username"] = $username;
                echo json_encode(["msg" => "Sikeres bejelentkezés!"]);
            }else{
                echo json_encode(["msg" => "Helytelen jelszó!"]);
            }
        }else{
            echo json_encode(["msg" => "Felhasználó nem létezik!"]);
        }
    }catch(exception $e){
        echo json_encode(["msg" => "Sikertelen csatlakozás az adatbázisra! Hiba: {$e}"]);
    }

?>