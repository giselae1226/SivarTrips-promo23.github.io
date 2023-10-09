<!DOCTYPE html>
<?php
require 'conn/connection.php';

?>
<html>
<head>
	<title>SivarTrips</title>
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
		<img src="img/Sivartrips.png	">
		</div>
		<div class="login-content">
			<form method="post"  action="procesarregistro.php">
               
				<img src="images/Sivartrips.png	">
				<h1 class="title">Registrate</h1>
				 <h2>Por favor completa los siguientes datos: </h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		  
           		   <div class="div">
           		   	
           		   		<input type="text" class="input" placeholder="Usuario"required name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   
           		    	<input type="password" class="input" placeholder="Contraseña"required name="password">
            	   </div>
            	</div>
<a href="login.php	">Iniciar sesión</a>
            	<button type="submit" class="btn" name="insertar">Registrarse</button>
            	 <button type="reset"class="btn">Limpiar</button>
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
</body>
</html>
