<?php
if(!$_POST){
    header('location: registrarse.php');
}
else {
    //incluimos el archivo funciones que tiene la conexion
    require 'conn/connection.php';
    //Recuperamos los valores que vamos a llenar en la BD
    $username = htmlentities($_POST ['username']);
    $password = htmlentities($_POST ['password']);
   

    //insertar es el nombre del boton guardar que esta en el archivo alumnos.view.php
    if (isset($_POST['insertar'])){

     $result = $conn->query("insert into users (username, password) values ('$username', '$password')");
        if (isset($result)) {
            header('location:registrarse.php?info=1');
        } else {
            header('location:registrarse.php?err=1');
        }// validación de registro

    
    }

}