<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");

session_start();
$calificacion = $_POST["calificacion"];
$comentario = $_POST["comentario"];
$usuario = $_SESSION['id'];
$id_producto = $_GET['id'];




if (strlen($calificacion) > 0 ) {

        $objConsulta = new consultas();
        $result = $objConsulta->calificacionProductos($calificacion,  $usuario, $id_producto, $comentario);
    
}else{
    echo '<script> alert("Error") </script>';
    echo '<script>location.href="../theme/single2.php?id=' . $id_producto . '"</script>';
}

?>


