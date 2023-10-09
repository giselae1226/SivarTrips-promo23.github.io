<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sivartrips";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el número de DUI de la fila a eliminar
$numDUI = $_POST['numDUI'];

// Consulta SQL para eliminar la fila
$sql = "DELETE FROM compra WHERE num_DUI = '$numDUI'";
$conn->query($sql);

$conn->close();
?>