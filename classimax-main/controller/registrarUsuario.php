<?php

require_once("../model/conexion.php");
require_once("../model/consultas.php");


$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$clave = $_POST["telefono"];
$rol = $_POST["rol"];
$estado = $_POST["estado"];


    if (strlen($nombre)>0 && strlen($apellido)>0 && strlen($email)>0 && strlen($telefono)>0 && strlen($rol)>0 && strlen($estado)>0) {
        $claveinc = md5($clave);
        $foto = "../Uploads/usuarios/" .$_FILES['foto']['name'];
        // Movemos el archivo a la carpeta uploads
        $mover=move_uploaded_file($_FILES['foto'] ['tmp_name'], $foto);

        $objConsulta = new consultas();
        $result = $objConsulta->insertarUsuariodesdeAdmin($nombre,$apellido,$email,$telefono, $claveinc, $rol,$estado, $foto);
    } else{
    echo '<script> alert("Los campos estan incompletos") </script>';
    echo '<script>location.href="../views/administrador/registrar_usuario.php" </script>';
}

?>


