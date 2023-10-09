<?php
//incluimos el archivo de conección y funciones
require 'conn/connection.php';
require 'funciones.php';

//consulta de lugares
$lugares = $conn->prepare("select * from lugares");
$lugares->execute();
$lugares = $lugares->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compra de paquete turístico</title>
     <link rel="stylesheet" href="css/stylecompra.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <section class="hero" id="hero">
        <div class="container">
            <h2 class="h2-sub">
                <span class="fil">B</span>ienvenido
            </h2>
            <h1 class="head">¡Compra nuestros paquetes turísticos!</h1>
            <div class="he-des">
                
                
                
            </div>
        </div>
    </section>
    <center>
	<h1> Venta de paquete turístico</h1><br><br>
	<h2>Por favor complete el siguiente formulario</h2>
</center>
	<form method="POST" class="form" action="procesarcompra.php">
                <label>Nombres y apellidos</label><br>
                <input type="text" required name="nombres" >
                <br>

                 <label>No de DUI</label><br>
                <input type="text" min="9" class="number" name="numDUI" required>
                <br><br>

                <label>Telefono</label><br>
                <input type="text" min="9" class="number" name="telefono" required>
                <br><br>
            
  <label>Lugar</label><br>
                <select name="lugar" required>
                    <?php foreach ($lugares as $lugar):?>
                        <option value="<?php echo $lugar['id'] ?>"><?php echo $lugar['Nombre'] ?></option>
                    <?php endforeach;?>
                </select>
                <br><br>

                <label for="cantidad_comprada" >Cantidad de Cupos a comprar: </label>
                <input type="number" name="cantidad_comprada" min="1">

                <button type="submit" name="insertar">Guardar</button> <button type="reset">Limpiar</button> 
                <br><br>
<li class="right"><a href="logout.php">Salir</a> </li>
 <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                ?>
            </form>


        <?php
        if(isset($_GET['err']))
            echo '<span class="error">Error al guardar</span>';
        ?>
        </div>
</div>

<footer>
    <p>Derechos reservados &copy; 2023</p>
</footer>

</body>

</html>
</body>
</html>