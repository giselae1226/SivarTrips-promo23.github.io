<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require 'conn/connection.php';

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $users = $conn->prepare("select username, password from userspersonal where username = '".$username."' and password = '".$password."'");
    $users->execute();
    if($users->rowCount() > 0){
        $user = $users->fetch();
        if($user['username'] == $username && $user['password'] == $password){
            //existe el usuario y esa contraseña
            session_start();
            $_SESSION["username"] = $username;
            setcookie("activo", 1);
            header("Location: listadocompras.php", true, 301);
        } else {
            http_response_code(401);
            //echo "Credenciales incorrectas";
            header('location:personal.php?err=1');
        }
    }else {
        http_response_code(401);
        header('location:personal.php?err=1');
    }
} else {
    http_response_code(405);
    echo "SOLO SE PUEDE POST";

    // POST_GET
}