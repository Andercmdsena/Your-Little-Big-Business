<html>
    <head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script> -->
    </head>

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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Registro Exitoso!",
                text: "El usuario se registró con éxito.",
                confirmButtonText: "Ir al login"
            }).then(function() {
                window.location = "../theme/login.php";
            });</script>';
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Registro Exitoso!",
                text: "El usuario se registró con éxito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/administrador/registrar_Usuario.php";
            });</script>';
        }
    }
    public function insertarUserAdmin($identificacion, $tipo_de_dato, $nombres, $apellidos, $email, $telefono, $claveMd , $estado, $foto){


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
           echo '<script> 
           swal.fire({
               icon: "error",
               title: "¡Registro fallido!",
               text: "Los datos del usuario ya se encuentran en el sistema.",
               confirmButtonText: "Ir al menu"
           }).then(function() {
               window.location = "../views/administrador/registrar_admin.php";
           });</script>';
           

        }else{
           // Creamos la variable que contendra la consulta a ejecutar
           $insertar = "INSERT INTO Administradores (identificacion, tipo_de_dato, nombres, apellidos, email, telefono, clave, estado,foto) VALUES(:identificacion, :tipo_de_dato, :nombres, :apellidos, :email, :telefono, :claveMd , :estado, :foto)";


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
           $result->bindParam(":estado", $estado);
           $result->bindParam(":foto", $foto);

           // ejecutamos el insert

           $result->execute();

           echo '<script> 
           swal.fire({
               icon: "success",
               title: "¡Registro Exitoso!",
               text: "Usuario registrado con exito.",
               confirmButtonText: "Ir al menu"
           }).then(function() {
               window.location = "../views/administrador/registrar_admin.php";
           });</script>';

       }


    }
    public function mostrarUserAdmin(){


        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM administradores order by Nombres asc";
 
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
 
         $consultar = "SELECT * FROM administradores where Identificacion=:id";
 
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



     public function filtroCategoria($categoria){
        $f = null;
     
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Utilizamos % en los extremos para permitir coincidencias parciales
        $categoria = "%".$categoria."%";
        
        $consultar = "SELECT * FROM servicios WHERE categoria LIKE :categoria";
    
        $result = $conexion->prepare($consultar);
    
        $result->bindParam(":categoria", $categoria);
    
        $result->execute();
        
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    
     public function filtroCategoriaProductos($categoria){
        $f = null;
     
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Utilizamos % en los extremos para permitir coincidencias parciales
        $categoria = "%".$categoria."%";
        
        $consultar = "SELECT * FROM productos WHERE categoria LIKE :categoria";
    
        $result = $conexion->prepare($consultar);
    
        $result->bindParam(":categoria", $categoria);
    
        $result->execute();
        
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    

     public function buscarProducto($arg_nombre){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
         $nombre = "%".$arg_nombre."%";
         $consultar = "SELECT * FROM productos where nombre like :nombre";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":nombre", $nombre);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
     }
     public function buscarServicio($arg_nombre){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
         $nombre = "%".$arg_nombre."%";
         $consultar = "SELECT * FROM servicios where nombre like :nombre";
 
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
        echo '<script> 
        swal.fire({
            icon: "error",
            title: "¡Eliminación exitosa!",
            text: "Usuario eleminado con exito.",
            confirmButtonText: "Ir al menu"
        }).then(function() {
            window.location = "../Views/Administrador/ver_usuario_admin.php";
        });</script>';
      
      
      
      }
      public function restarEmprendedor($id_producto, $cantidad) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion->get_conexion();
      
        // Actualiza la cantidad en la tabla productos
        $actualizar = "UPDATE productos SET cantidad = cantidad - :cantidad WHERE id = :id_producto";
      
        $result = $conexion->prepare($actualizar);
        $result->bindParam(":cantidad", $cantidad);
        $result->bindParam(":id_producto", $id_producto);
        
        $result->execute();
    
        // Agrega aquí la lógica que desees para manejar el resultado de la actualización
    
        
    }
    public function resetearCarrito($id_Usuario, $id_producto) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion->get_conexion();
      
        // Elimina la fila en la tabla carrito
        $eliminar = "DELETE FROM carrito WHERE id_usuario = :id_usuario AND id_producto = :id_producto";
      
        $result = $conexion->prepare($eliminar);
        $result->bindParam(":id_usuario", $id_Usuario);
        $result->bindParam(":id_producto", $id_producto);
        
        $result->execute();
    
        // Agrega aquí la lógica que desees para manejar el resultado de la eliminación
    }
    
    


      public function cancelarPedido($id_pedido, $id_producto,$id) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Utiliza una sentencia DELETE para eliminar la fila en detalles_pedido
        $eliminar = "DELETE FROM detalles_pedido WHERE id_pedido = :id_pedido AND id_producto = :id_producto AND ID = :id";
    
        // Prepara la consulta
        $result = $conexion->prepare($eliminar);
    
        // Enlaza los parámetros
        $result->bindParam(":id_pedido", $id_pedido, PDO::PARAM_INT);
        $result->bindParam(":id_producto", $id_producto, PDO::PARAM_INT);
        $result->bindParam(":id", $id, PDO::PARAM_INT);
    
        try {
            // Ejecuta la consulta
            $result->execute();
    
            // Muestra un mensaje de éxito
            echo '<script> 
                swal.fire({
                    icon: "success",
                    title: "Eliminación exitosa",
                    text: "Pedido eliminado con éxito.",
                    confirmButtonText: "Ir al menú"
                }).then(function() {
                    window.location = "../Views/cliente/pedidos.php";
                });
            </script>';
        } catch (PDOException $e) {
            // Muestra un mensaje de error en caso de excepción
            echo '<script> 
                swal.fire({
                    icon: "error",
                    title: "Error en la eliminación",
                    text: "Ocurrió un error al intentar eliminar el pedido.",
                    confirmButtonText: "Volver"
                }).then(function() {
                    window.history.back();
                });
            </script>';
        }
    }
    
    
     public function eliminarCalificacion ($id, $id_producto) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from calificacion where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo "<script>
        swal.fire({
            icon: 'error',
            title: '¡Calificacion eliminada con éxito!',
            text: 'Calificacion eliminada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../theme/single2.php?id=" . $id_producto . "';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../theme/single2.php?id=" . $id_producto . "';
            }, 6000);
        }, 6000);
    </script>";

      
      
      
      }
     public function eliminarCalificacionServicio ($id, $id_servicio) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from calificacion where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo "<script>
        swal.fire({
            icon: 'error',
            title: '¡Calificacion eliminada con éxito!',
            text: 'Calificacion eliminada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../theme/servicioIndividual.php?id=" . $id_servicio . "';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../theme/servicioIndividual.php?id=" . $id_servicio . "';
            }, 6000);
        }, 6000);
    </script>";

      
      
      
      }
      public function eliminarUsuario ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from usuario where ID = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> 
        swal.fire({
            icon: "error",
            title: "¡Eliminiación exitosa!",
            text: "Usuario usuario con exito.",
            confirmButtonText: "Ir al menu"
        }).then(function() {
            window.location = "../Views/Administrador/ver_usuarioo.php";
        });</script>';
      
      
      
      }
      public function eliminarEmprendedor($id) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $eliminar = "UPDATE usuario SET Estado = 0 WHERE id = :id"; // Set Estado to 0
    
        $result = $conexion->prepare($eliminar);
        $result->bindParam(":id", $id);
    
        if ($result->execute()) {
            echo '<script> 
        swal.fire({
            icon: "success",
            title: "¡Eliminiación exitosa!",
            text: "Usuario usuario con exito.",
            confirmButtonText: "Ir al login"
        }).then(function() {
            window.location = "../theme/index.php";
        });</script>';
        } else {
            echo '<script> 
            swal.fire({
                icon: "error",
                title: "¡Eliminiación exitosa!",
                text: "Usuario usuario con exito.",
                confirmButtonText: "Ir al registro"
            }).then(function() {
                window.location = "../theme/register.php";
            });</script>';
        }
    }
    public function cantidadCarrito($id, $cantidad) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $actualizar = "UPDATE carrito SET cantidad = :cantidad WHERE id = :id"; // Actualizar cantidad
    
        $result = $conexion->prepare($actualizar);
        $result->bindParam(":id", $id);
        $result->bindParam(":cantidad", $cantidad, PDO::PARAM_INT); // Asegurar que la cantidad es tratada como entero
    
        if ($result->execute()) {
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Cantidad actualizada con éxito!",
                text: "Cantidad actualizada con éxito.",
                confirmButtonText: "Ir al carrito"
            }).then(function() {
                window.location = "../theme/carrito.php";
            });</script>';
        } else {
            echo '<script> 
            swal.fire({
                icon: "error",
                title: "¡Erorr!",
                text: "Error al actualizar la cantidad.",
                confirmButtonText: "Ir al carrito"
            }).then(function() {
                window.location = "../theme/carrito.php";
            });</script>';
        }
    }
    
    
      
      public function eliminarProducto ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from productos where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> 
        swal.fire({
            icon: "success",
            title: "¡Producto eliminado con exito.!",
            text: "Producto eliminado con exito.",
            confirmButtonText: "Ir al carrito"
        }).then(function() {
            window.location = "../views/emprendedor/verProductos.php";
        });</script>';
      
      
      
      }
      public function eliminarServicio ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from servicios where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> 
        swal.fire({
            icon: "success",
            title: "¡Servicios eliminado con exito.!",
            text: "Servicios eliminado con exito.",
            confirmButtonText: "Ir al carrito"
        }).then(function() {
            window.location = "../Views/emprendedor/verServicio.php";
        });</script>';
      
      
      
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
      public function cargarServicio($id_servicio){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
         $consultar = "SELECT * FROM servicios where id = :id_producto";
 
         $result=$conexion->prepare($consultar);

         $result->bindParam(":id_producto", $id_servicio);
 
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Usuario actualizado con exito.!",
                text: "Usuario actualizado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/administrador/ver_usuarioo.php";
            });</script>';
        }
        
      }
      public function modificarProducto($arg_campo, $arg_valor, $arg_id_producto){
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        try {
            $consulta = "UPDATE productos SET $arg_campo = :valor WHERE id = :id_producto";
    
            $result = $conexion->prepare($consulta);
            $result->bindParam(":valor", $arg_valor);
            $result->bindParam(":id_producto", $arg_id_producto);
    
            if (!$result->execute()) {
                throw new Exception("Error al modificar el producto");
            }
    
            echo '<script> 
                swal.fire({
                    icon: "success",
                    title: "¡Producto actualizado con éxito!",
                    text: "Producto actualizado con éxito.",
                    confirmButtonText: "Ir al menú"
                }).then(function() {
                    window.location = "../views/emprendedor/verProductos.php";
                });</script>';
        } catch (Exception $e) {
            // Manejar el error de manera adecuada, por ejemplo, mostrar un mensaje al usuario.
            
        }
    }
    
    public function modificarServicio($arg_campo, $arg_valor, $id_servicio){
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        try {
            $consulta = "UPDATE servicios SET $arg_campo = :valor WHERE id = :id_servicio";
    
            $result = $conexion->prepare($consulta);
            $result->bindParam(":valor", $arg_valor);
            $result->bindParam(":id_servicio", $id_servicio);
    
            if (!$result->execute()) {
                throw new Exception("Error al modificar el servicio");
            }
    
            echo '<script> 
                swal.fire({
                    icon: "success",
                    title: "¡Servicio actualizado con éxito!",
                    text: "Servicio actualizado con éxito.",
                    confirmButtonText: "Ir al menú"
                }).then(function() {
                    window.location = "../views/emprendedor/verServicio.php";
                });</script>';
        } catch (Exception $e) {
            // Manejar el error de manera adecuada, por ejemplo, mostrar un mensaje al usuario.
            
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

        echo'<script> 
        swal.fire({
            icon: "success",
            title: "¡Producto actualizado con exito.!",
            text: "Producto actualizado con exito.",
            confirmButtonText: "Ir al menu"
        }).then(function() {
            window.location = "../views/administrador/verProductosAdmin.php";
        });</script>';
        
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Usuario actualizado con exito.!",
                text: "Usuario actualizado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/cliente/usuario.php";
            });</script>';
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Usuario actualizado con exito.!",
                text: "Usuario actualizado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/emprendedor/emprendedor.php";
            });</script>';
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Usuario actualizado con exito.!",
                text: "Usuario actualizado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/administrador/home.php";
            });</script>';
        }
        
      }
      public function modificarUsuarioAdminRegistrados($arg_campo, $arg_valor, $arg_id_producto){
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
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Usuario actualizado con exito.!",
                text: "Usuario actualizado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/administrador/ver_usuario_admin.php";
            });</script>';
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

        echo "<script>
    swal.fire({
        icon: 'success',
        title: '¡Usuario actualizado con éxito!',
        text: 'Usuario actualizado con éxito.',
        confirmButtonText: 'Ir al menú',
        willClose: function() {
            // Redirección al hacer clic en el botón de confirmación
            location.href='../views/administrador/perfil.php?id=$id';
        }
    });

    // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
    setTimeout(function() {
        // Llamada a la segunda función con el retraso de 3 segundos
        setTimeout(function() {
            location.href='../views/administrador/perfil.php?id=$id';
        }, 6000);
    }, 6000);
</script>";




        
      }
      public function actualizarFotoUsuario($id, $foto){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set foto=:foto WHERE ID = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);

        $result -> execute();

        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Informacion actualizada con éxito!',
            text: 'Informacion actualizada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../views/cliente/usuario2.php?id=$id';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../views/cliente/usuario2.php?id=$id';
            }, 6000);
        }, 6000);
    </script>";

        
      }
      public function actualizarFotoEmprendedor($id, $foto){
        
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set foto=:foto WHERE ID = :id";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":id", $id);
        $result->bindParam(":foto", $foto);

        $result -> execute();

        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Informacion actualizada con éxito!',
            text: 'Informacion actualizada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../views/emprendedor/emprendedor2.php?id=$id';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../views/emprendedor/emprendedor2.php?id=$id';
            }, 6000);
        }, 6000);
    </script>";
        
      }


     public function actualizarClaveAdmin($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE Administradores Set clave=:claveMd WHERE Identificacion = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Informacion actualizada con éxito!',
            text: 'Informacion actualizada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../views/administrador/perfil.php?id=$identificacion';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../views/administrador/perfil.php?id=$identificacion';
            }, 6000);
        }, 6000);
    </script>";
      }


     public function actualizarClaveUsuario($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set clave=:claveMd WHERE ID = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Informacion actualizada con éxito!',
            text: 'Informacion actualizada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../views/cliente/usuario2.php?id=$identificacion';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../views/cliente/usuario2.php?id=$identificacion';
            }, 6000);
        }, 6000);
    </script>";

      }
     public function actualizarClaveEmprendedor($identificacion, $claveMd){
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $consulta = "UPDATE usuario Set clave=:claveMd WHERE ID = :identificacion";

        $result = $conexion ->prepare($consulta);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":claveMd", $claveMd);

        $result -> execute();

        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Informacion actualizada con éxito!',
            text: 'Informacion actualizada con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../views/emprendedor/emprendedor2.php?id=$identificacion';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../views/emprendedor/emprendedor2.php?id=$identificacion';
            }, 6000);
        }, 6000);
    </script>";
      }



      // -------------------------------------------------Consultas emprendedor-------------------------

    public function insertarProducto($nombre_pro,$precio_pro,$cantidad,$categoria, $descripcion, $foto, $foto2, $foto3){

        session_start();

        $modelo = new conexion();
        $conexion = $modelo -> get_conexion();
        $consultas = "SELECT * FROM productos WHERE id=:id";
    
        $result = $conexion->prepare($consultas);
    
        $result->bindParam(":id", $id); // Corrección aquím
    
        $result->execute();
    
        $f = $result->fetch();
    
        
            $insertar = "INSERT INTO productos (nombre, precio, cantidad, categoria, descripcion, foto, foto2, foto3, id_emprendedor) VALUES(:nombre_pro, :precio_pro, :cantidad, :categoria,:descripcion, :foto, :foto2, :foto3 , :id_emprendedor)";
    
            $result = $conexion->prepare($insertar);
    
            $result->bindParam(":nombre_pro", $nombre_pro);
            $result->bindParam(":precio_pro", $precio_pro);
            $result->bindParam(":cantidad", $cantidad);
            $result->bindParam(":categoria", $categoria);
            $result->bindParam(":descripcion", $descripcion);
            $result->bindParam(":foto", $foto);
            $result->bindParam(":foto2", $foto2);
            $result->bindParam(":foto3", $foto3);
            $result->bindParam(":id_emprendedor", $_SESSION['id']);
    
            $result->execute();
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Producto registrado con exito.!",
                text: "Producto registrado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/emprendedor/registroProductos.php";
            });</script>';
        
    }
    public function insertarServicio($nombre_pro,$precio_pro,$duracion,$categoria, $descripcion, $foto, $foto2, $foto3){

        session_start();

        $modelo = new conexion();
        $conexion = $modelo -> get_conexion();
        $consultas = "SELECT * FROM productos WHERE id=:id";
    
        $result = $conexion->prepare($consultas);
    
        $result->bindParam(":id", $id); // Corrección aquím
    
        $result->execute();
    
        $f = $result->fetch();
    
        
            $insertar = "INSERT INTO servicios (nombre, precio, duracion, categoria, descripcion, foto, foto2, foto3, id_emprendedor) VALUES(:nombre_pro, :precio_pro, :duracion, :categoria,:descripcion, :foto, :foto2, :foto3 , :id_emprendedor)";
    
            $result = $conexion->prepare($insertar);
    
            $result->bindParam(":nombre_pro", $nombre_pro);
            $result->bindParam(":precio_pro", $precio_pro);
            $result->bindParam(":duracion", $duracion);
            $result->bindParam(":categoria", $categoria);
            $result->bindParam(":descripcion", $descripcion);
            $result->bindParam(":foto", $foto);
            $result->bindParam(":foto2", $foto2);
            $result->bindParam(":foto3", $foto3);
            $result->bindParam(":id_emprendedor", $_SESSION['id']);
    
            $result->execute();
            echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Servicio registrado con exito.!",
                text: "Servicio registrado con exito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../views/emprendedor/registroServicios.php";
            });</script>';
        
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

    public function mostrarProducto_usuario($arg_id_usuario = null) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar todos los productos, incluyendo la posibilidad de un INNER JOIN
        $consultar = "SELECT productos.*, usuario.* FROM productos INNER JOIN usuario ON productos.id_emprendedor = usuario.ID WHERE usuario.ID = usuario.ID ORDER BY productos.nombre ASC";
    
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

    
    public function mostrarServicio($arg_id_usuario = null) {
        $f = null;
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        
        // Consulta SQL para seleccionar todos los productos, incluyendo la posibilidad de un INNER JOIN
        $consultar = "SELECT servicios.* 
                      FROM servicios " . ($arg_id_usuario !== null ? "INNER JOIN usuario ON servicios.id_emprendedor = usuario.ID WHERE usuario.ID = :id_usuario" : "") . "
                      ORDER BY servicios.nombre ASC";
                      
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
    public function mostrarPublicacionCarrusel(){
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Seleccionar los productos y el promedio de calificaciones
        $consultar = "SELECT p.*, AVG(c.calificacion) as promedio_calificacion
                      FROM productos p
                      LEFT JOIN calificacion c ON p.id = c.id_producto
                      GROUP BY p.id
                      ORDER BY promedio_calificacion DESC
                      LIMIT 6";
    
        $result = $conexion->prepare($consultar);
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    
    
    public function mostrarPublicacionServicio(){
        
        $f=null;
        
        
        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();
        
        $consultar = "SELECT * FROM servicios order by nombre asc";
        
        $result=$conexion->prepare($consultar);
        
        $result->execute();
        
        
        while ($resultado=$result->fetch()) {
            $f[] = $resultado;
        }
        
        return $f;
        
    }
    
    public function calificacionProductos($calificacion, $usuario, $id_producto, $comentarios){
        
        
        $objConexion = new  Conexion();
        $conexion = $objConexion->get_conexion();
        
        $consultar = "INSERT INTO calificacion (calificacion, id_usuario, id_producto,  comentarios) values(:calificacion, :id_usuario, :id_producto , :comentarios)";
        
        $result = $conexion->prepare($consultar);
        
        
        $result -> bindParam(":calificacion", $calificacion);
        $result -> bindParam(":comentarios", $comentarios);
        $result -> bindParam(":id_usuario", $usuario);
        $result -> bindParam(":id_producto", $id_producto);
        
        $result->execute();
        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Comentario registrado con éxito!',
            text: 'Comentario registrado con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../theme/single2.php?id=" . $id_producto . "';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../theme/single2.php?id=" . $id_producto . "';
            }, 6000);
        }, 6000);
    </script>";
    }
    public function calificacionServicio($calificacion, $usuario, $id_servicio, $comentarios){
        
        
        $objConexion = new  Conexion();
        $conexion = $objConexion->get_conexion();
        
        $consultar = "INSERT INTO calificacion (calificacion, id_usuario, id_servicio,  comentarios) values(:calificacion, :id_usuario, :id_servicio , :comentarios)";
        
        $result = $conexion->prepare($consultar);
        
        
        $result -> bindParam(":calificacion", $calificacion);
        $result -> bindParam(":comentarios", $comentarios);
        $result -> bindParam(":id_usuario", $usuario);
        $result -> bindParam(":id_servicio", $id_servicio);
        
        $result->execute();
        echo "<script>
        swal.fire({
            icon: 'success',
            title: '¡Comentario registrado con éxito!',
            text: 'Comentario registrado con éxito.',
            confirmButtonText: 'Ir al menú',
            willClose: function() {
                // Redirección al hacer clic en el botón de confirmación
                location.href='../theme/servicioIndividual.php?id=" . $id_servicio . "';
            }
        });
    
        // Agrega un retraso de 2000 milisegundos (2 segundos) antes de ejecutar la siguiente función
        setTimeout(function() {
            // Llamada a la segunda función con el retraso de 3 segundos
            setTimeout(function() {
                location.href='../theme/servicioIndividual.php?id=" . $id_servicio . "';
            }, 6000);
        }, 6000);
    </script>";
    }



    public function insertarDetallesProductos($id_pedido, $id_producto){
        
        
        $objConexion = new  Conexion();
        $conexion = $objConexion->get_conexion();
        
        $consultar = "INSERT INTO detalles_pedido (id_pedido, id_producto) values(:id_pedido, :id_producto)";
        
        $result = $conexion->prepare($consultar);
        
        
        $result -> bindParam(":id_pedido", $id_pedido);
        $result -> bindParam(":id_producto", $id_producto);
        
        $result->execute();
        echo '<script>location.href="../TCPDF-main/prueba.php"</script>';

    }
    public function consultaCarrito($id_usuario){
        
        
       
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();
        
            $consultar = "SELECT * FROM carrito WHERE id_usuario = :id_usuario";
            
            $result = $conexion->prepare($consultar);
        
            $result->bindParam(":id_usuario", $id_usuario);
        
            $result->execute();
        
            // Verificar si hay productos en el carrito
            if ($result->rowCount() > 0) {
                echo '<a style="font-size: 25px; font-weight: bold; padding: 15px 20px;" class="botonpagar" href="../theme/pasarelapagos.php">Pagar</a>';
            } else {
                echo '';
            }
        
        

    }
    
    
    public function pedido($id_usuario, $id_emprendedor, $fecha_pedido) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        
        $consultar = "INSERT INTO pedidos (id_usuario, id_emprendedor, fecha_pedido) VALUES (:id_usuario, :id_emprendedor, :fecha_pedido)";
        
        $result = $conexion->prepare($consultar);
        
        $result->bindParam(":id_usuario", $id_usuario);
        $result->bindParam(":id_emprendedor", $id_emprendedor);
        $result->bindParam(":fecha_pedido", $fecha_pedido);
        
        $result->execute();
        
        // Retornar el resultado de la ejecución para que el código que llama a la función pueda manejar la redirección
        return $result;
    }
    
    
    
    
    
    public function mostrarCalificacion($id) {
        $f = null;
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta con LEFT JOIN a la tabla usuario y administradores
        $consultar = "SELECT calificacion.*, usuario.foto as foto_usuario, usuario.*, administradores.foto as foto_administrador, administradores.*
                      FROM calificacion 
                      LEFT JOIN usuario ON calificacion.id_usuario = usuario.id
                      LEFT JOIN administradores ON calificacion.id_usuario = administradores.Identificacion
                      WHERE calificacion.id_producto = :id_producto";
    
        $result = $conexion->prepare($consultar);
    
        // Asigna el valor del parámetro antes de ejecutar la consulta
        $result->bindParam(':id_producto', $id, PDO::PARAM_INT);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    public function mostrarCalificacionServicio($id) {
        $f = null;
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta con LEFT JOIN a la tabla usuario y administradores
        $consultar = "SELECT calificacion.*, usuario.foto as foto_usuario, usuario.*, administradores.foto as foto_administrador, administradores.*
                      FROM calificacion 
                      LEFT JOIN usuario ON calificacion.id_usuario = usuario.id
                      LEFT JOIN administradores ON calificacion.id_usuario = administradores.Identificacion
                      WHERE calificacion.id_servicio = :id_servicio";
    
        $result = $conexion->prepare($consultar);
    
        // Asigna el valor del parámetro antes de ejecutar la consulta
        $result->bindParam(':id_servicio', $id, PDO::PARAM_INT);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
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
                        SELECT COUNT(*) as total_registros FROM administradores
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
    
    

    //------------------------------------------Carrito--------------------------------------------

    public function agregarCarrito($producto, $usuario){
        $objConexion = new  Conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "INSERT INTO carrito (id_producto, id_usuario) values(:id_producto, :id_usuario)";

        $result = $conexion->prepare($consultar);


        $result -> bindParam(":id_producto", $producto);
        $result -> bindParam(":id_usuario", $usuario);

        $result->execute();
        echo '<script> 
            swal.fire({
                icon: "success",
                title: "¡Producto agregado al carrito.!",
                text: "Producto agregado al carrito.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../theme/Carrito.php";
            });</script>';
    }

    public function productoIndividual($id){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
        //  $consultar = "SELECT * FROM productos where id=:id";

        $consultar = "SELECT productos.*, usuario.foto AS usuario_foto, usuario.Nombre AS usuario_nombre
        FROM productos
        INNER JOIN usuario ON productos.id_emprendedor = usuario.ID
        WHERE productos.id = :id";
    


 
         $result=$conexion->prepare($consultar);

         $result->bindParam(':id', $id);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
        echo '<script>location.href="../theme/single2.php"</script>';
    }
    public function servicioIndividual($id){
        $f=null;
 
 
         $objConexion = new Conexion();
         $conexion = $objConexion -> get_conexion();
 
        //  $consultar = "SELECT * FROM productos where id=:id";

        $consultar = "SELECT servicios.*, usuario.foto AS usuario_foto, usuario.Nombre AS usuario_nombre
        FROM servicios
        INNER JOIN usuario ON servicios.id_emprendedor = usuario.ID
        WHERE servicios.id = :id";
    


 
         $result=$conexion->prepare($consultar);

         $result->bindParam(':id', $id);
 
        $result->execute();
        
 
        while ($resultado=$result->fetch()) {
         $f[] = $resultado;
        }
 
        return $f;
        echo '<script>location.href="../theme/single2.php"</script>';
    }
    
    public function mostrarProductoCarrito($arg_id_usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar los productos en el carrito de un usuario específico
        $consultar = "SELECT productos.*, carrito.id AS id_carrito, carrito.cantidad AS cantidad_carrito
        FROM productos
        INNER JOIN carrito ON productos.id = carrito.id_producto
        WHERE carrito.id_usuario = :id_usuario
        
        ";
    
        $result = $conexion->prepare($consultar);
    
        // Vincular el parámetro :id_usuario
        $result->bindParam(":id_usuario", $arg_id_usuario);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    public function mostrarPedido3($arg_id_usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar los productos en el carrito de un usuario específico
        $consultar = "SELECT productos.*, carrito.id AS id_carrito, pedidos.id AS id_pedido, carrito.id_producto AS id_producto_carrito
        FROM productos
        INNER JOIN carrito ON productos.id = carrito.id_producto
        LEFT JOIN pedidos ON carrito.id_usuario = pedidos.id_usuario
        WHERE carrito.id_usuario = :id_usuario AND productos.id = carrito.id_producto";
    
        $result = $conexion->prepare($consultar);
    
        // Vincular el parámetro :id_usuario
        $result->bindParam(":id_usuario", $arg_id_usuario);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    public function recorrerPedidos() {
        $pedidos = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar todos los pedidos
        $consultar = "SELECT *
            FROM detalles_pedido";
    
        $result = $conexion->prepare($consultar);
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $pedidos[] = $resultado;
        }
    
        return $pedidos;
    }
    
        
       // ... Otros métodos de la clase ...
    
        public function verificarEntradaExistente($idPedido, $idProducto) {
            // Aquí deberías implementar la lógica para verificar si ya existe una entrada
            // con el mismo id_pedido e id_producto en la tabla de detalles de productos.
            // Deberías realizar una consulta SQL para realizar esta verificación.
            // Retorna true si existe, false si no existe.
    
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();
    
            $consulta = "SELECT COUNT(*) as count FROM detalles_pedido WHERE id_pedido = :id_pedido AND id_producto = :id_producto";
            $result = $conexion->prepare($consulta);
            $result->bindParam(':id_pedido', $idPedido, PDO::PARAM_INT);
            $result->bindParam(':id_producto', $idProducto, PDO::PARAM_INT);
            $result->execute();
    
            $count = $result->fetch(PDO::FETCH_ASSOC)['count'];
    
            return $count > 0;
        }
        
        public function obtenerUltimoIdPedido() {
            $objConexion = new Conexion();
            $conexion = $objConexion->get_conexion();
    
            $consultar = "SELECT MAX(id) as id_pedido FROM pedidos";
    
            $result = $conexion->prepare($consultar);
            $result->execute();
    
            $row = $result->fetch(PDO::FETCH_ASSOC);
    
            return $row['id_pedido'];
        }
        
        
    
    public function mostrarDetalles($arg_id_usuario) {
        $f = null;
        
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
        
        // Consulta SQL para seleccionar todos los detalles de pedidos de un usuario específico
        $consultar = "SELECT * FROM pedidos WHERE id_usuario = :id_usuario";
        
        $result = $conexion->prepare($consultar);
        
        // Vincular el parámetro :id_usuario
        $result->bindParam(":id_usuario", $arg_id_usuario);
        
        $result->execute();
        
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
        
        return $f;
    }
    
    public function obtenerId($arg_id_usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar los productos en el carrito de un usuario específico
        $consultar = "SELECT productos.*, carrito.*
        FROM productos
        INNER JOIN carrito ON productos.id = carrito.id_producto
        WHERE carrito.id_usuario = :id_usuario
        ";
    
        $result = $conexion->prepare($consultar);
    
        // Vincular el parámetro :id_usuario
        $result->bindParam(":id_usuario", $arg_id_usuario);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    public function obtenerIdEmprendedor($producto) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar los productos en el carrito de un usuario específico
        $consultar = "SELECT id_emprendedor FROM productos WHERE id = :id_producto";

    $result = $conexion->prepare($consultar);

    // Vincular el parámetro :id_producto
    $result->bindParam(":id_producto", $producto);

    $result->execute();

    while ($resultado = $result->fetch()) {
        $f[] = $resultado;
    }

    return $f;
    }


    public function mostrarPedido($usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consultar = "
        SELECT *
        FROM productos
        JOIN detalles_pedido ON productos.id = detalles_pedido.id_producto
        JOIN pedidos ON detalles_pedido.id_pedido = pedidos.id
        WHERE productos.id_emprendedor = :usuario
            AND pedidos.id_emprendedor = :usuario
        ORDER BY productos.id_emprendedor, pedidos.id;
        
        ";
    
        $result = $conexion->prepare($consultar);
    
        // Enlaza el parámetro :usuario
        $result->bindParam(':usuario', $usuario, PDO::PARAM_INT);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    
    public function mostrarPedidoCliente($usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consultar = "
        SELECT *
        FROM productos
        JOIN detalles_pedido ON productos.id = detalles_pedido.id_producto
        JOIN pedidos ON detalles_pedido.id_pedido = pedidos.id
        WHERE pedidos.id_usuario = :usuario
        ORDER BY pedidos.id;
        ";
    
        $result = $conexion->prepare($consultar);
    
        // Enlaza el parámetro :usuario
        $result->bindParam(':usuario', $usuario, PDO::PARAM_INT);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
    }
    
    
    
    
    
    

    public function eliminarProductoCarrito ($id) {
        $objConexion = new Conexion();
        
        $conexion = $objConexion -> get_conexion();
      
        $eliminar= "DELETE from carrito where id = :id";
      
        $result = $conexion->prepare($eliminar);
        $result-> bindParam (":id", $id );
        
        $result->execute ();
        echo '<script> alert("Producto eliminado del carrtio con exito") </script>';
        echo "<script> location.href='../theme/carrito.php' </script>";
      
      
      
      }
      public function solicitarServicio($servicio, $usuario) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consulta = "SELECT u.Email
                     FROM servicios s
                     JOIN usuario u ON s.id_emprendedor = u.id
                     WHERE s.id = :id";
    
        $resultado = $conexion->prepare($consulta);
        $resultado->bindParam(":id", $servicio);  // Corregido a :id y utilizando $servicio
        $resultado->execute();
    
        if ($resultado->rowCount() > 0) {
            $row = $resultado->fetch(PDO::FETCH_ASSOC);
            $email = $row['Email'];
    
            // Construir el enlace mailto
            $mailtoLink = "mailto:" . $email;
    
            // Redirigir al usuario al enlace mailto
            header("Location: $mailtoLink");
            exit;  // Asegura que la redirección se realice correctamente
        } else {
            echo 'No se encontró información para el ID de producto proporcionado.';
        }
    }
    
    
    
    
      public function verCantidad($id_producto, $id_usuario) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        $consulta = "SELECT cantidad FROM carrito WHERE id_producto = :id_producto AND id_usuario = :id_usuario";
        
        $result = $conexion->prepare($consulta);
        $result->bindParam(":id_producto", $id_producto);
        $result->bindParam(":id_usuario", $id_usuario);
    
        $result->execute();
    
        // Verificar si hay coincidencias
        if ($result->rowCount() > 0) {
            // Obtener el valor de la cantidad
            $fila = $result->fetch(PDO::FETCH_ASSOC);
            $cantidad = $fila['cantidad'];
    
            // Devolver la cantidad
            return $cantidad;
        } else {
            // Devolver un valor predeterminado o lanzar una excepción según tus necesidades
            return 0; // Por ejemplo, si el producto no se encuentra en el carrito
        }
    }
    
    
      public function promedioCalificacionProductos($id) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta para obtener las calificaciones
        $consulta = "SELECT * FROM calificacion WHERE id_producto = :id_producto";
        $result = $conexion->prepare($consulta);
        $result->bindParam(":id_producto", $id);
        $result->execute();
    
        // Obtener los resultados
        $calificaciones = $result->fetchAll(PDO::FETCH_ASSOC);
    
        // Calcular el promedio de calificaciones
        $totalCalificaciones = count($calificaciones);
        $sumaCalificaciones = 0;
    
        foreach ($calificaciones as $calificacion) {
            $sumaCalificaciones += $calificacion['calificacion'];
        }
    
        $promedio = ($totalCalificaciones > 0) ? $sumaCalificaciones / $totalCalificaciones : 0;
    
        // Convertir el promedio a un formato de estrellas (0 a 5)
        $promedioEstrellas = round($promedio, 1);
    
// Supongamos que $promedioEstrellas ya está definido con un valor entre 1 y 5


// Supongamos que $promedioEstrellas ya está definido con un valor entre 1 y 5, incluyendo decimales

// Obtener el entero inferior o el siguiente entero según el valor decimal
$promedioRedondeado = floor($promedioEstrellas);

echo "<strong>Promedio de calificaciones: </strong> <strong>" . $promedioEstrellas . "</strong>";

// Agregar condicionales para mostrar la cantidad correspondiente de estrellas
if ($promedioRedondeado == 1) {
    echo " &#9733;";
} elseif ($promedioRedondeado == 2) {
    echo " &#9733;&#9733;";
} elseif ($promedioRedondeado == 3) {
    echo " &#9733;&#9733;&#9733;";
} elseif ($promedioRedondeado == 4) {
    echo " &#9733;&#9733;&#9733;&#9733;";
} elseif ($promedioRedondeado == 5) {
    echo " &#9733;&#9733;&#9733;&#9733;&#9733;";
} else {
    echo "<strong> Sin calificación</strong>";
}


    
        // No es necesario realizar un DELETE en esta función, ya que parece que originalmente había un código de eliminación que fue eliminado.
        // Si necesitas más ayuda o aclaraciones, no dudes en preguntar.
    }
      public function promedioCalificacionServicio($id_servicio) {
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta para obtener las calificaciones
        $consulta = "SELECT * FROM calificacion WHERE id_servicio = :id_servicio";
        $result = $conexion->prepare($consulta);
        $result->bindParam(":id_servicio", $id_servicio);
        $result->execute();
    
        // Obtener los resultados
        $calificaciones = $result->fetchAll(PDO::FETCH_ASSOC);
    
        // Calcular el promedio de calificaciones
        $totalCalificaciones = count($calificaciones);
        $sumaCalificaciones = 0;
    
        foreach ($calificaciones as $calificacion) {
            $sumaCalificaciones += $calificacion['calificacion'];
        }
    
        $promedio = ($totalCalificaciones > 0) ? $sumaCalificaciones / $totalCalificaciones : 0;
    
        // Convertir el promedio a un formato de estrellas (0 a 5)
        $promedioEstrellas = round($promedio, 1);
    
// Supongamos que $promedioEstrellas ya está definido con un valor entre 1 y 5


// Supongamos que $promedioEstrellas ya está definido con un valor entre 1 y 5, incluyendo decimales

// Obtener el entero inferior o el siguiente entero según el valor decimal
$promedioRedondeado = floor($promedioEstrellas);

echo "<strong>Promedio de calificaciones: </strong> <strong>" . $promedioEstrellas . "</strong>";

// Agregar condicionales para mostrar la cantidad correspondiente de estrellas
if ($promedioRedondeado == 1) {
    echo " &#9733;";
} elseif ($promedioRedondeado == 2) {
    echo " &#9733;&#9733;";
} elseif ($promedioRedondeado == 3) {
    echo " &#9733;&#9733;&#9733;";
} elseif ($promedioRedondeado == 4) {
    echo " &#9733;&#9733;&#9733;&#9733;";
} elseif ($promedioRedondeado == 5) {
    echo " &#9733;&#9733;&#9733;&#9733;&#9733;";
} else {
    echo "<strong> Sin calificación</strong>";
}


    
        // No es necesario realizar un DELETE en esta función, ya que parece que originalmente había un código de eliminación que fue eliminado.
        // Si necesitas más ayuda o aclaraciones, no dudes en preguntar.
    }
    
    
      public function mostrarRecibo($arg_id_usuario) {
        $f = null;
    
        $objConexion = new Conexion();
        $conexion = $objConexion->get_conexion();
    
        // Consulta SQL para seleccionar los productos en el carrito de un usuario específico con información adicional del usuario
        $consultar = "SELECT 
        productos.*, 
        carrito.id AS id_carrito, 
        usuario_cliente.*, 
        emprendedor.nombre AS nombre_emprendedor, 
        emprendedor.email AS email_emprendedor, 
        emprendedor.telefono AS telefono_emprendedor,
        carrito.cantidad AS cantidad_carrito
    FROM 
        productos
    INNER JOIN 
        carrito ON productos.id = carrito.id_producto
    LEFT JOIN 
        usuario AS usuario_cliente ON carrito.id_usuario = usuario_cliente.ID
    LEFT JOIN 
        usuario AS emprendedor ON productos.id_emprendedor = emprendedor.ID
    WHERE 
        carrito.id_usuario = :id_usuario
    ";
        
    
    
    
    
        $result = $conexion->prepare($consultar);
    
        // Vincular el parámetro :id_usuario
        $result->bindParam(":id_usuario", $arg_id_usuario);
    
        $result->execute();
    
        while ($resultado = $result->fetch()) {
            $f[] = $resultado;
        }
    
        return $f;
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
            $consultar .= "administradores WHERE email=:email";
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
                
                if ($_SESSION['estado'] == 0) {
                    echo '<script> 
                        swal.fire({
                            icon: "success",
                            title: "¡Su cuenta está bloqueada!",
                            text: "Su cuenta está bloqueada.",
                            confirmButtonText: "Ir al menú"
                        }).then(function() {
                            window.location = "../theme/login.php";
                        });</script>';
                } elseif ($tipo_de_rol == "administrador") {
                    echo '<script> 
                        swal.fire({
                            icon: "success",
                            title: "¡Bienvenido!",
                            text: "Que bueno volverte a ver.",
                            confirmButtonText: "Ir al menú"
                        }).then(function() {
                            window.location = "../views/administrador/home.php";
                        });</script>';
                } elseif ($tipo_de_rol == "cliente") {
                    echo '<script> 
                        swal.fire({
                            icon: "success",
                            title: "¡Bienvenido cliente!",
                            text: "Que bueno volverte a ver.",
                            confirmButtonText: "Ir al menú"
                        }).then(function() {
                            window.location = "../views/cliente/usuario.php";
                        });</script>';
                } else{
                    echo '<script> 
                        swal.fire({
                            icon: "success",
                            title: "¡Bienvenido Emprendedor!",
                            text: "Que bueno volverte a ver.",
                            confirmButtonText: "Ir al menú"
                        }).then(function() {
                            window.location = "../views/emprendedor/emprendedor.php";
                        });</script>';

                }
            } else {
                echo '<script> 
                swal.fire({
                    icon: "error",
                    title: "¡La clave no coincide.!",
                    text: "La clave no coincide.",
                    confirmButtonText: "Ir al menu"
                }).then(function() {
                    window.location = "../theme/login.php";
                });</script>';
            }
        } else {
            echo '<script> 
            swal.fire({
                icon: "error",
                title: "¡Error.!",
                text: "Verifica que tu correo esté bien diligenciado o regístrate si no tienes cuenta.",
                confirmButtonText: "Ir al menu"
            }).then(function() {
                window.location = "../theme/login.php";
            });</script>';
        }
    }

    public function cerrarSesion()
    {
        session_start();
        session_destroy();
        echo '<script> 
                swal.fire({
                    icon: "error",
                    title: "¡Sesion cerrada.!",
                    text: "Nos vemos pronto.",
                    confirmButtonText: "Ir al menu"
                }).then(function() {
                    window.location = "../theme/login.php";
                });</script>';
    }
}

?>

</html>