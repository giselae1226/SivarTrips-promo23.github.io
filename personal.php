<?php
//arreglo con mensajes que puede recibir
$messages = [
    "1" => "Credenciales incorrectas",
    "2" => "No ha iniciado sesión"
];
?>
<!DOCTYPE html>
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
			<form method="post" action="loginpost_personal.php">
				<img src="images/Sivartrips.png	">
				<h1 class="title">Bienvenido</h1>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" class="input" placeholder="username"required name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   
           		    	<input type="password" class="input" placeholder="password" required name="password">
            	   </div>
            	</div>
            	
            	<a href="inicio.php">Volver a inicio</a>
            	<button type="submit"class="btn">Entrar</button>
            	
            </form>
            <?php
        if(isset($_GET['err']) && is_numeric($_GET['err']) && $_GET['err'] > 0 && $_GET['err'] < 3 )
            echo '<span class="error">'.$messages[$_GET['err']].'</span>';
        ?>
        </div>
    </div>
</body>
</html>
