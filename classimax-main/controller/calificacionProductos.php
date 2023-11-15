<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();
$calificacion = $_POST["calificacion"];
$usuario = $_SESSION['id'];
$id_producto = $_GET['id'];




if (strlen($calificacion) > 0 ) {

        $objConsulta = new consultas();
        $result = $objConsulta->calificacionProductos($calificacion,  $usuario, $id_producto);
    
}else{
    echo '<script> alert("Los campos estan incompletos o la controseña no coincide") </script>';
    echo '<script>location.href="../theme/single2.php" </script>';
}

?>


