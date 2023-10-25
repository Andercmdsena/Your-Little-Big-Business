<?php
// Enlazamos las dependencias necesarias


function seleccionarProducto(){
    if(isset($_GET['id'])){
        $consultas = new consultas();
        $id_producto = $_GET['id'];
        $filas = $consultas->cargarProducto($id_producto);

        foreach ($filas as $fila){
            $estado = ($fila['Estado'] == 1) ? 'Disponible' : (($fila['Estado'] == 0) ? 'Agotado' : 'Pendiente');
            echo "
        <form action = '../../controller/modificarProducto.php' method = 'post'>
        
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type='text' class='form-control' name = 'nombre' value='".$fila['nombre']."' ></td>

            </tr>
            <tr>
                <td>Precio</td>
                <td><input type='text' class='form-control' name = 'precio' value='".$fila['precio']."'></td>

            </tr>
            <tr>
                <td>Cantidad</td>
                <td><input type='text' class='form-control' name = 'cantidad' value='".$fila['cantidad']."'></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td><input type='text' class='form-control' name = 'categoria' value='".$fila['categoria']."'></td>
            </tr>
            <tr>
            <td>Estado</td>
            <td>
                
                    <select name='estado' id='' class='form-control'>
                                            <option value=''> <i class='ti-eye'></i>".$estado."</option>
                                            <option value='1'>Disponible</option>
                                            <option value='0'>Agotado</option>
                                            <option value='2'>Pendiente</option>
                    </select>

            </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='hidden' name = 'id_producto' value='".$id_producto."'></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='submit' value = 'Modificar productos' ></td>
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
