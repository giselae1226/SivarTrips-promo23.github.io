<?php
//iniciamos la sesion
session_start();
//esta pregunta la debe hacer en todos los archivos para validar que antes el usuario haya iniciado sesion
if ( isset($_COOKIE["activo"]) && isset($_SESSION['username'])) {
    setcookie("activo", 1, time() + 3600);
} else {
    http_response_code(403);
    header('location:login.php?err=2');
}