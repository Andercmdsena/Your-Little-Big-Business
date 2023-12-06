<?php
// Enlazamos las dependencias necesarias


function seleccionar(){
    if(isset($_GET['id'])){
        $consultas = new consultas();
        $id_producto = $_GET['id'];
        $filas = $consultas->cargarUsuario($id_producto);

        foreach ($filas as $fila){
            $estado = ($fila['Estado'] == 1) ? 'Activo' : (($fila['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
            echo "
        <form action = '../../controller/modificarUsuario.php' method = 'post'>
        
        <style>

        input{
            width:535px;
            margin:5px;
        }

        select{

            padding:5px;
        }
        
    </style>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type='text' class='form-control' name = 'nombre' value='".$fila['Nombre']."' ></td>

            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type='text' class='form-control' name = 'apellidos' value='".$fila['Apellido']."'></td>

            </tr>
            <tr>
                <td>Email</td>
                <td><input type='text' class='form-control' name = 'email' value='".$fila['Email']."'></td>
            </tr>
            <tr>
                <td>Telefono</td>
                <td><input type='text' class='form-control' name = 'telefono' value='".$fila['Telefono']."'></td>
            </tr>
            <tr>
            <td>Estado</td>
            <td>
            <select name = 'estado'>
                <option>".$estado."</option>
                <option value=1>Activo</option>
                <option value=0>Bloqueado</option>
                <option value=2>Pendiente</option>
            </select>
                
            
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='hidden' name = 'id_producto' value='".$id_producto."'></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='submit' value = 'Modificar usuarios' ></td>
            </tr>
        </table>

        </form>
        ";
        }
        
    }else {
        echo"error";
    }
}
?>
