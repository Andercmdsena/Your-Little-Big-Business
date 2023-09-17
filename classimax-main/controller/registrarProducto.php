<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");


$nombre = $_POST["nombre_pro"];
$precio = $_POST["precio_pro"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];


    if (strlen($nombre)>0 && strlen($precio)>0 && strlen($cantidad)>0 && strlen($categoria)>0) {
        $foto = "../Uploads/usuarios/" .$_FILES['foto']['name'];
        // Movemos el archivo a la carpeta uploads
        $mover=move_uploaded_file($_FILES['foto'] ['tmp_name'], $foto);

        $objConsulta = new consultas();
        $result = $objConsulta->insertarProducto($nombre,$precio, $cantidad, $categoria, $foto);
    } else{
    echo '<script> alert("Los campos estan incompletos") </script>';
    echo '<script>location.href="../views/administrador/registroProductos.php" </script>';
}

?>


