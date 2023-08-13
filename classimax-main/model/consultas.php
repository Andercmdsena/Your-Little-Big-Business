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

class ValidarSesion
{
    public function iniciarSesion($email, $clave)
    {
        // CREAMOS EL OBJETO DE LA CONEXION
        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        // Creamos la variable que contendrá la consulta a ejecutar
        $consultar = "SELECT * FROM usuario WHERE email=:email";

        // PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
        $result = $conexion->prepare($consultar);

        // CONVERTIMOS LOS ARGUMENTOS EN PARÁMETROS
        $result->bindParam(":email", $email);

        // EJECUTAMOS EL SELECT (Corregimos el error tipográfico)
        $result->execute();

        // Debemos convertir la variable result en un arreglo para segmentar los datos que necesitamos
        $f = $result->fetch();

        // si el usuario coincide validamos la clave
        if ($f) {
            if ($f['clave'] == $clave) {
                // Se realiza el inicio de sesión
                session_start();

                // CREAMOS VARIABLES DE SESIÓN
                $_SESSION['email'] = $f['email'];

                // Redirigimos al usuario
                echo '<script> alert("Bienvenido") </script>';
                echo "<script> location.href='../theme/index.php' </script>";
            } else {
                echo '<script> alert("La clave no coincide intentalo de nuevo") </script>';
                echo "<script> location.href='../theme/login.php' </script>";
            }
        } else {
            echo '<script> alert("Verifica que tu correo esté bien diligenciado o regístrate si no tienes cuenta") </script>';
            echo "<script> location.href='../theme/login.php' </script>";
        }
    }
}

?>