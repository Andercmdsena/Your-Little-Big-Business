<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");


$nombre = $_POST["nombre_ser"];
$precio = $_POST["precio_ser"];
$duracion = $_POST["duracion"];
$categoria = $_POST["categoria"];
$descripcion = $_POST["descripcion"];


    if (strlen($nombre)>0 && strlen($precio)>0 && strlen($duracion)>0 && strlen($categoria)>0 && strlen($descripcion)>0) {
        $foto = "../Uploads/productos/" .$_FILES['foto']['name'];
        // Movemos el archivo a la carpeta uploads
        $mover=move_uploaded_file($_FILES['foto'] ['tmp_name'], $foto);

        $foto2 = "../Uploads/productos/" .$_FILES['foto2']['name'];
        // Movemos el archivo a la carpeta uploads
        $mover2=move_uploaded_file($_FILES['foto2'] ['tmp_name'], $foto2);

        $foto3 = "../Uploads/productos/" .$_FILES['foto3']['name'];
        // Movemos el archivo a la carpeta uploads
        $mover3=move_uploaded_file($_FILES['foto3'] ['tmp_name'], $foto3);

        $objConsulta = new consultas();
        $result = $objConsulta->insertarServicio($nombre,$precio, $duracion, $categoria,$descripcion, $foto, $foto2,$foto3);
    } else{
    echo '<script> alert("Los campos estan incompletos") </script>';
    echo '<script>location.href="../views/emprendedor/registroServicio.php" </script>';
}

?>


