<?php

class consultas{
    public function insertarUsuarios($nombre,$apellido,$email,$telefono, $claveinc, $rol){
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
            $insertar = "INSERT INTO usuario (Nombre, Apellido, Email, Telefono, Clave, Rol) VALUES(:nombre, :apellido, :email, :telefono, :clave, :rol)";

            $result = $conexion->prepare($insertar);

            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":apellido", $apellido);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":clave", $claveinc);
            $result->bindParam(":rol", $rol);


            $result->execute();
            echo '<script> alert("Usuario registrado con éxito") </script>';
            echo '<script>location.href="../theme/productos.php" </script>';
        }
    }
    public function insertarUsuariodesdeAdmin($nombre,$apellido,$email,$telefono, $claveinc, $rol, $estado, $foto){
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
            $insertar = "INSERT INTO usuario (Nombre, Apellido, Email, Telefono, Clave, Rol,Estado, foto) VALUES(:nombre, :apellido, :email, :telefono, :clave, :rol, :estado, :foto)";

            $result = $conexion->prepare($insertar);

            $result->bindParam(":nombre", $nombre);
            $result->bindParam(":apellido", $apellido);
            $result->bindParam(":email", $email);
            $result->bindParam(":telefono", $telefono);
            $result->bindParam(":clave", $claveinc);
            $result->bindParam(":rol", $rol);
            $result->bindParam(":estado", $estado);
            $result->bindParam(":foto", $foto);

            $result->execute();
            echo '<script> alert("Usuario registrado con éxito") </script>';
            echo '<script>location.href="../views/administrador/registrar_Usuario.php" </script>';
        }
    }
    public function insertarUserAdmin($identificacion, $tipo_de_dato, $nombres, $apellidos, $email, $telefono, $claveMd ,$rol, $estado, $foto, $foto2, $foto3){


        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();


        $consultar = "SELECT * FROM Administradores WHERE identificacion=:identificacion or email=:email";

        // PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR
        $result = $conexion->prepare($consultar);

        // CONVERTIMOS LOS ARGUMENTOS EN PARÁMETROS
        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":email", $email);

        // EJECUTAMOS EL SELECT (Corregimos el error tipográfico)
        $result->execute();

        $f = $result->fetch();

        if($f){
           echo '<script> alert("Los datos del usuario ya se encuentra en el sistema") </script>';
           echo "<script> location.href='../views/administrador/registrar_admin.php'</script>";
           

        }else{
           // Creamos la variable que contendra la consulta a ejecutar
           $insertar = "INSERT INTO Administradores (identificacion, tipo_de_dato, nombres, apellidos, email, telefono, clave,rol,estado,foto, foto2, foto3) VALUES(:identificacion, :tipo_de_dato, :nombres, :apellidos, :email, :telefono, :claveMd ,:rol, :estado, :foto, :foto2, :foto3)";


           // PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA FUNCION ANTERIOR

           $result= $conexion->prepare($insertar);


           // convertimos los argumentos en parametros

           $result->bindParam(":identificacion", $identificacion);
           $result->bindParam(":tipo_de_dato", $tipo_de_dato);
           $result->bindParam(":nombres", $nombres);
           $result->bindParam(":apellidos", $apellidos);
           $result->bindParam(":email", $email);
           $result->bindParam(":telefono", $telefono);
           $result->bindParam(":claveMd", $claveMd);
           $result->bindParam(":rol", $rol);
           $result->bindParam(":estado", $estado);
           $result->bindParam(":foto", $foto);
           $result->bindParam(":foto2", $foto2);
           $result->bindParam(":foto3", $foto3); 

           // ejecutamos el insert

           $result->execute();

           echo '<script> alert("Usuarios registrado con exito") </script>';
           echo "<script> location.href='../views/administrador/registrar_admin.php'</script>";

       }


    }
    public function mostrarUserAdmin(){


        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM Administradores order by Nombres asc";
 
         $result=$conexion->prepare($consultar);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
 
     }

     

     public function mostrarUsuario(){
        $f = null;
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Modifica la consulta SQL para unir las tablas "usuario" y "estados"
        $consultar = "SELECT u.*, e.estado AS NombreEstado
                      FROM usuario AS u
                      JOIN estados AS e ON u.Estado = e.id_estado
                      ORDER BY u.Nombre ASC";
    
        $result = $conexion->prepare($consultar);
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    


     public function verPerfilAdmin($id){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM Administradores where Identificacion=:id";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(':id', $id);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }

     public function verPerfilUsuario($id){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM usuario where ID=:id";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(':id', $id);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }
     public function verPerfilEmprendedor($id){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM usuario where ID=:id";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(':id', $id);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }

     public function mostrarUsuarioPerfil(){


        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM usuario order by Nombre asc";
 
         $result=$conexion->prepare($consultar);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
 
     }

     public function buscarUsuarioAdmin($arg_nombre){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
         $nombre = "%".$arg_nombre."%";
         $consultar = "SELECT * FROM Administradores where Nombres like :nombre";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":nombre", $nombre);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }
     public function buscarUsuario($arg_nombre){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
         $nombre = "%".$arg_nombre."%";
         $consultar = "SELECT * FROM usuario where Nombre like :nombre";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":nombre", $nombre);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }

     public function eliminarUserAdmin ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from Administradores where Identificacion = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> alert("Usuario eliminado con exito") </script>';
        echo "<script> location.href='../Views/Administrador/ver_usuario_admin.php' </script>";
      
      
      
      }
      public function eliminarUsuario ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from usuario where ID = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> alert("Usuario eliminado con exito") </script>';
        echo "<script> location.href='../Views/Administrador/ver_usuarioo.php' </script>";
      
      
      
      }
      
      public function eliminarProducto ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from productos where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> alert("Producto eliminado con exito") </script>';
        echo "<script> location.href='../Views/Administrador/verProductos.php' </script>";
      
      
      
      }
      public function cargarUsuario($arg_id_producto){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM usuario where ID = :id_producto";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":id_producto", $arg_id_producto);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
      }
      public function cargarProducto($arg_id_producto){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM productos where id = :id_producto";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":id_producto", $arg_id_producto);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
      }
    
      public function modificarUsuario($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario set $arg_campo = :valor WHERE ID = :id_producto";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":valor", $arg_valor);
        $result->bindParam(":id_producto", $arg_id_producto);

        if(!$result){
            return "Error al modificar el usuario";
        }else{
            $result -> execute();
            echo '<script> alert("Usuario actualizado exitosamente") </script>';
            echo "<script> location.href='../views/administrador/home.php' </script>";
        }
        
      }
      public function modificarProducto($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE productos set $arg_campo = :valor WHERE id = :id_producto";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":valor", $arg_valor);
        $result->bindParam(":id_producto", $arg_id_producto);

        if(!$result){
            return "Error al modificar el producto";
        }else{
            $result -> execute();
            echo '<script> alert("Producto actualizado exitosamente") </script>';
            echo "<script> location.href='../views/administrador/verProductos.php' </script>";
        }
        
      }
      public function modificarProductoAdmin($estado, $id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE productos Set Estado = :Estado WHERE id = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":Estado", $estado);
        $result->bindParam(":id", $id_producto);

        $result -> execute();

        echo'<script> alert("Producto actualizado exitosamdasente") </script>';
        echo "<script> location.href='../views/administrador/verProductosAdmin.php' </script>";
        
      }
      public function modificarUsuario2($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario set $arg_campo = :valor WHERE ID = :id_producto";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":valor", $arg_valor);
        $result->bindParam(":id_producto", $arg_id_producto);

        if(!$result){
            return "Error al modificar el usuario";
        }else{
            $result -> execute();
            echo '<script> alert("Usuario actualizado exitosamente") </script>';
            echo "<script> location.href='../views/administrador/usuario.php' </script>";
        }
        
      }
      public function modificarEmprendedor($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario set $arg_campo = :valor WHERE ID = :id_producto";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":valor", $arg_valor);
        $result->bindParam(":id_producto", $arg_id_producto);

        if(!$result){
            return "Error al modificar el usuario";
        }else{
            $result -> execute();
            echo '<script> alert("Usuario actualizado exitosamente") </script>';
            echo "<script> location.href='../views/administrador/emprendedor.php' </script>";
        }
        
      }
      public function cargarUsuarioAdmin($arg_id_producto){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM Administradores where Identificacion = :id_producto";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":id_producto", $arg_id_producto);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
      }
      public function modificarUsuarioAdmin($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE Administradores set $arg_campo = :valor WHERE Identificacion = :id_producto";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":valor", $arg_valor);
        $result->bindParam(":id_producto", $arg_id_producto);

        if(!$result){
            return "Error al actualizar el usuario";
        }else{
            $result -> execute();
            echo '<script> alert("Usuario actualizado exitosamente") </script>';
            echo "<script> location.href='../views/administrador/home.php' </script>";
        }
        
      }

      public function actualizarFotoAdmin($id, $foto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE Administradores Set foto=:foto WHERE Identificacion = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/perfil.php?id=$id'</script>";

        
      }
      public function actualizarFotoUsuario($id, $foto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set foto=:foto WHERE ID = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/usuario2.php?id=$id'</script>";

        
      }
      public function actualizarFotoEmprendedor($id, $foto){
        
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set foto=:foto WHERE ID = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/emprendedor2.php?id=$id'</script>";
        
      }


     public function actualizarClaveAdmin($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE Administradores Set clave=:claveMd WHERE Identificacion = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/perfil.php?id=$identificacion'</script>";
      }


     public function actualizarClaveUsuario($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set clave=:claveMd WHERE ID = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/usuario2.php?id=$identificacion'</script>";
      }
     public function actualizarClaveEmprendedor($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set clave=:claveMd WHERE ID = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo '<script>alert("Informacion actualizada")</script>';
        echo "<script>location.href='../views/administrador/emprendedor2.php?id=$identificacion'</script>";
      }



      // -------------------------------------------------Consultas emprendedor-------------------------

    public function insertarProducto($nombre_pro,$precio_pro,$cantidad,$categoria, $descripcion, $foto){

        session_start();

        $modelo = new conexion();
        $conexion = $modelo -> get_conexion();
        $consultas = "SELECT * FROM productos WHERE id=:id";
    
        $result = $conexion->prepare($consultas);
    
        $result->bindParam(":id", $id); // Corrección aquím
    
        $result->execute();
    
        $f = $result->fetch();
    
        if($f){
            echo '<script> alert("Los datos del usuario ya se encuentra en el sistema") </script>';
            echo '<script>location.href="../theme/register.php" </script>';
        }else{
            $insertar = "INSERT INTO productos (nombre, precio, cantidad, categoria, descripcion, foto, id_emprendedor) VALUES(:nombre_pro, :precio_pro, :cantidad, :categoria,:descripcion, :foto,:id_emprendedor)";
    
            $result = $conexion->prepare($insertar);
    
            $result->bindParam(":nombre_pro", $nombre_pro);
            $result->bindParam(":precio_pro", $precio_pro);
            $result->bindParam(":cantidad", $cantidad);
            $result->bindParam(":categoria", $categoria);
            $result->bindParam(":descripcion", $descripcion);
            $result->bindParam(":foto", $foto);
            $result->bindParam(":id_emprendedor", $_SESSION['id']);
    
            $result->execute();
            echo '<script> alert("Producto registrado con éxito") </script>';
            echo '<script>location.href="../views/administrador/registroProductos.php" </script>';
        }
    }
    public function mostrarProducto($arg_id_usuario = null) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar todos los productos, incluyendo la posibilidad de un INNER JOIN
        $consultar = "SELECT productos.* 
                      FROM productos " . ($arg_id_usuario !== null ? "INNER JOIN usuario ON productos.id_emprendedor = usuario.ID WHERE usuario.ID = :id_usuario" : "") . "
                      ORDER BY productos.nombre ASC";
    
        $result = $conexion->prepare($consultar);
    
        // Si se proporciona un ID de usuario, vincularlo en la consulta
        if ($arg_id_usuario !== null) {
            $result->bindParam(":id_usuario", $arg_id_usuario);
        }
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    public function mostrarProductoAdmin(){


        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM productos order by nombre asc";
 
         $result=$conexion->prepare($consultar);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
 
     }

     public function mostrarPublicacion(){

        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM productos order by nombre asc";
 
         $result=$conexion->prepare($consultar);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;

     }




     public function contarUsuarios(){
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consultar = "SELECT SUM(total_registros) as total FROM (
                        SELECT COUNT(*) as total_registros FROM usuario
                        UNION ALL
                        SELECT COUNT(*) as total_registros FROM Administradores
                     ) as combined";
    
        $result = $conexion->prepare($consultar);
    
        $result->execute();
    
        // Obtenemos el resultado de la consulta
        $row = $result->fetch(PDO::FETCH_ASSOC);
    
        // Retornamos el valor total de usuarios
        return $row['total'];
    }

    
    public function contarProductos(){
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consultar = "SELECT COUNT(*) as total FROM productos "; // Utilizamos 'as total' para darle un alias al resultado
    
        $result = $conexion->prepare($consultar);
    
        $result->execute();
    
        // Obtenemos el resultado de la consulta
        $row = $result->fetch(PDO::FETCH_ASSOC);
    
        // Retornamos el valor total de usuarios
        return $row['total'];
    }
    
    


    
    
}






class ValidarSesion
{
    public function iniciarSesion($email, $clave, $tipo_de_rol)
    {
        // CREAMOS EL OBJETO DE LA CONEXION
        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        // Creamos la variable que contendrá la consulta a ejecutar
        $consultar = "SELECT * FROM ";

        // Elegimos la consulta y la tabla según el tipo_de_rol
        if ($tipo_de_rol == "administrador") {
            $consultar .= "Administradores WHERE email=:email";
        } else {
            $consultar .= "usuario WHERE Email=:email";
        }

        // PREPARAMOS TODO LO NECESARIO PARA EJECUTAR LA CONSULTA
        $result = $conexion->prepare($consultar);

        // CONVERTIMOS LOS ARGUMENTOS EN PARÁMETROS
        $result->bindParam(":email", $email);

        // EJECUTAMOS EL SELECT
        $result->execute();

        // Debemos convertir la variable result en un arreglo para segmentar los datos que necesitamos
        $f = $result->fetch();

        // si el usuario coincide validamos la clave
        if ($f) {
            if ($f['clave'] == $clave) {
                // Se realiza el inicio de sesión
                session_start();

                // CREAMOS VARIABLES DE SESIÓN
                $_SESSION['id'] = ($tipo_de_rol == "administrador") ? $f['Identificacion'] : $f['ID'];
                $_SESSION['email'] = $f['email'] ?? $f['Email'];
                $_SESSION['rol'] = $f['rol'] ?? $f['Rol'];
                $_SESSION['estado'] = $f['Estado'] ?? $f['estado'];
                $_SESSION['AUTENTICADO'] = "SI";

                // Redirigimos al usuario según el tipo_de_rol
                
                if ($tipo_de_rol == "administrador") {
                    echo '<script> alert("Bienvenido") </script>';
                    echo "<script> location.href='../views/administrador/home.php' </script>";

                }elseif($_SESSION['estado'] == 0){
                    echo '<script> alert("Su cuenta esta bloqueada") </script>';
                    echo "<script> location.href='../theme/login.php' </script>";
                } 
                elseif($tipo_de_rol == "cliente"){
                    echo '<script> alert("Bienvenido") </script>';
                    echo "<script> location.href='../Views/administrador/usuario.php' </script>";
                } 
                else {
                    echo '<script> alert("Bienvenido") </script>';
                    echo "<script> location.href='../Views/administrador/emprendedor.php' </script>";
                }
            } else {
                echo '<script> alert("La clave no coincide intentalo de nuevo") </script>';
                echo "<script> location.href='../theme/login.php' </script>";
            }
        } else {
            echo '<script> alert("Verifica que tu correo esté bien diligenciado o regístrate si no tienes cuenta") </script>';
            echo "<script> location.href='../theme/login.php' </script>";
        }
    }

    public function cerrarSesion()
    {
        session_start();
        session_destroy();

        echo '<script> location.href="../theme/login.php" </script>';
    }
}

?>