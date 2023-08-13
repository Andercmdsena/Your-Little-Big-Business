<?php
// Enlazamos las dependencias necesarias
require_once("../model/conexion.php");
require_once("../model/consultas.php");

$email = $_POST['email'];
$clave = md5($_POST['clave']); // Corregimos el paréntesis de cierre y quitamos el punto y coma después del paréntesis.

// validamos que esté completa la información
if (strlen($email) > 0 && strlen($clave) > 0) {

    // Creamos el objeto a partir de la clase para enviar los argumentos a la función en el modelo.
    $objValidar = new ValidarSesion();
    $result = $objValidar->iniciarSesion($email, $clave); // Agregamos el punto y coma al final de esta línea.

} else {
    echo '<script> alert("Ingrese usuario y contraseña") </script>';
    echo "<script> location.href='../Views/Extras/page-login.html' </script>";
}
?>

