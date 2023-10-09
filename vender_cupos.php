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
//consulta de lugares
$lugares = $conn->prepare("select * from lugares");
$lugares->execute();
$lugares = $lugares->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $lugar_id = $_POST['lugar'];
    $cantidad_comprada = $_POST['cantidad_comprada']//Nuestra variable para la cantidad de cupos a comprar

    //Obtener los cupos disponibles 
    $sql_disponibles = "SELECT cupos_disponibles FROM lugares WHERE id = $lugar_id";
    $result = $conn->query($sql_disponibles);


    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $cupos_disponibles = $row["cupos_disponibles"];

        if($cupos_disponibles >= $cantidad_comprada){
            //Realizar la venta
            $nuevos_cupos_disponibles = $cupos_disponibles -$cantidad_comprada;
            $sql_venta = "UPDATE lugares SET cupos_disponibles = $nuevos_cupos_disponibles WHERE id = $lugar_id";

            if($conn->query($sql_venta) === TRUE){
                echo "Venta exitosa.Cupos disponibles restantes: $nuevos_cupos_disponibles";
                
            } else {
                echo "Error en la venta " .$conn->error;
            }
        } else {
            echo "No hay suficientes cupos disponibles para esta compra.";
        }
    }else{
        echo "Lugar no encontrado";
    }
}
$conn->close();
?>


