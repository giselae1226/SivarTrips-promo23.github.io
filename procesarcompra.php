<?php
if(!$_POST){
    header('location: compra.php');
}
else {
    //incluimos el archivo funciones que tiene la conexion
    require 'conn/connection.php';

    //Recuperamos los valores que vamos a llenar en la BD
    $NomyApell = htmlentities($_POST ['nombres']);
    $hora = htmlentities($_POST['hora']);
    $numDUI = htmlentities($_POST['numDUI']);
    $idlugar = htmlentities($_POST['lugar']);
    $cantidadcomprada = htmlentities($_POST['cantidad_comprada']);
    

    //insertar es el nombre del boton guardar que esta en el archivo alumnos.view.php
    if (isset($_POST['insertar'])){

        $result = $conn->query("insert into compra (num_DUI, NomyApell, id_lugar, cupos_comprados) values ('$numDUI', '$NomyApell', '$idlugar', '$cantidadcomprada' )");
        if (isset($result)) {
            header('location:compra.php?info=1');
        } else {
            header('location:compra.php?err=1');
        }// validación de registro

    
    }

}