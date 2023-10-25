<?php
// Enlazamos las dependencias necesarias


function seleccionarServicio(){
    if(isset($_GET['id'])){
        $consultas = new consultas();
        $id_servicio = $_GET['id'];
        $filas = $consultas->cargarServicio($id_servicio);

        foreach ($filas as $fila){
            echo "
        <form action = '../../controller/modificarServicio.php' method = 'post'>
        
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
                <td><input type='text' class='form-control' name = 'duracion' value='".$fila['duracion']."'></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td><input type='text' class='form-control' name = 'categoria' value='".$fila['categoria']."'></td>
            </tr>
            <tr>
                <td>Descripcion</td>
                <td>
                <textarea  name='descripcion' rows='4' cols='50'>
                ".$fila['descripcion']."
                </textarea>
                </td>
            </tr>
            <tr>
            <td>Estado</td>
            <td>
                
                    <select name='estado' id='' class='form-control'>
                                            <option value=''> <i class='ti-eye'></i>".$fila['Estado']."</option>
                                            <option value='1'>Disponible</option>
                                            <option value='0'>Agotado</option>
                                            <option value='2'>Pendiente</option>
                    </select>

            </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='hidden' name = 'id_servicio' value='".$id_servicio."'></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type='submit' value = 'Modificar servicio' ></td>
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
