<?php

class consultas{
    public function insertarUsuarios($email, $claveinc, $rol){
        $modelo = new conexion();
        $conexion = $modelo -> get_conexion();
        $consultas = "SELECT * FROM usuario WHERE email=:email";

        $result = $conexion->prepare($consultas);

        $result->bindParam(":email", $email); // Corrección aquí

        $result->execute();

        $f = $result->fetch();

        if($f){
            echo '<script> alert("Los datos del usuario ya se encuentra en el sistema") </script>';
            echo '<script>location.href="../theme/register.php" </script>';
        }else{
            $insertar = "INSERT INTO usuario (email, clave, rol) VALUES(:email, :claveinc, :rol)";

            $result = $conexion->prepare($insertar);

            $result->bindParam(":email", $email);
            $result->bindParam(":claveinc", $claveinc);
            $result->bindParam(":rol", $rol);

            $result->execute();
            echo '<script> alert("Usuario registrado con éxito") </script>';
            echo '<script>location.href="../theme/index.php" </script>';
        }
    }
}
?>