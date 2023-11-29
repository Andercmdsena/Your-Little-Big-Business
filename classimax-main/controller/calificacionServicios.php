<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['id'])) {
    $usuario = $_SESSION['id'];
    $calificacion = $_POST["calificacion"];
    $comentario = $_POST["comentario"];
    $id_servicio = $_GET['id'];

    // Verifica la longitud de las variables
    if (strlen($calificacion) > 0 && strlen($comentario) > 0 && strlen($id_servicio) > 0) {
        $objConsulta = new consultas();
        $result = $objConsulta->calificacionServicio($calificacion, $usuario, $id_servicio, $comentario);

        // Verifica si la calificación se guardó correctamente
        if ($result) {
            echo '<script>alert("Calificación enviada correctamente.");</script>';
            echo '<script>location.href="../theme/single2.php?id=' . $id_servicio . '";</script>';
        } 
    } else {
        echo '<script>alert("Error: Datos de entrada no válidos.");</script>';
    }
} else {
    // El usuario no ha iniciado sesión, muestra un mensaje
    echo '<script>alert("Por favor, inicia sesión para calificar el servicio.");</script>';
    echo '<script>location.href="../theme/login.php";</script>';
}

// Redirige al usuario a la página del producto después de procesar la calificación
?>


