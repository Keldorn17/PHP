<?php
    session_start();
    extract($_POST);
    if ($username == "Keldorn" && $password == "K3ld0rn"){
        $_SESSION['username'] = $username;
        echo json_encode(["msg" => "Sikeres bejelentkezés!","success" => true]);
    } else
        echo json_encode(["msg" => "Sikertelen bejelentkezés! (Helytelen felhasználónév vagy jelszó)", "success" => false]);
?>