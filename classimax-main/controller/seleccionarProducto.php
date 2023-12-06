<?php
// Enlazamos las dependencias necesarias


function seleccionarProducto(){
    if(isset($_GET['id'])){
        $consultas = new consultas();
        $id_producto = $_GET['id'];
        $filas = $consultas->cargarProducto($id_producto);

        foreach ($filas as $fila){
            $categoria = ($fila['categoria'] == 1) ? 'Tecnologia' :
            (($fila['categoria'] == 2) ? 'Moda' :
            (($fila['categoria'] == 3) ? 'Salud y belleza' :
            (($fila['categoria'] == 4) ? 'Deportes' :
            (($fila['categoria'] == 5) ? 'Bebes y juegos' :
            (($fila['categoria'] == 6) ? 'Alimentos y bebidas' :
            (($fila['categoria'] == 7) ? 'Oficina' :
            (($fila['categoria'] == 8) ? 'Hogar' :
            (($fila['categoria'] == 9) ? 'Mascotas' :
            (($fila['categoria'] == 10) ? 'Libros y medios' : 'Otro')))))))));
            
            $estado = ($fila['Disponibilidad'] == 1) ? 'Disponible' : (($fila['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');

            
            
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
                <td>
                <select name='categoria' id='' class='form-control'>
                <option value=''> <i class='ti-eye'></i>".$categoria."</option>
                <option value='1'>Tecnologia</option>
                <option value='2'>Moda</option>
                <option value='3'>Salud y belleza</option>
                <option value='4'>Deportes</option>
                <option value='5'>Bebes y juegos</option>
                <option value='6'>Alimentos y bebidas</option>
                <option value='7'>Oficina</option>
                <option value='8'>Hogar</option>
                <option value='9'>Mascotas</option>
                <option value='10'>Libros y medios</option>
                
            </select>
                </td>
                
            </tr>
            <tr>
            <td>Descripcion</td>
            <td>
                <textarea name='descripcion' rows='4' cols='50'>
                    " . $fila['descripcion'] . "
                </textarea>
            </td>
             </tr>
            <tr>
            <td>Estado</td>
            <td>
                
                    <select name='estado' id='' class='form-control'>
                        <option value='1'> <i class='ti-eye'></i>".$estado."</option>
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
                <td><input style='padding:5px' type='submit' value = 'Modificar productos' ></td>
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
