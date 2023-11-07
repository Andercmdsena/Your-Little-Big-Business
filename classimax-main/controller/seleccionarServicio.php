<?php
// Enlazamos las dependencias necesarias


function seleccionarServicio(){
    if(isset($_GET['id'])){
        $consultas = new consultas();
        $id_servicio = $_GET['id'];
        $filas = $consultas->cargarServicio($id_servicio);

        foreach ($filas as $fila){
            $estado = ($fila['Disponibilidad'] == 1) ? 'Disponible' : (($fila['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');
            $categoria = ($fila['categoria'] == 11) ? 'Carpintería' :
            (($fila['categoria'] == 12) ? 'Fontanería' :
            (($fila['categoria'] == 13) ? 'Electricidad' :
            (($fila['categoria'] == 14) ? 'Pintura' :
            (($fila['categoria'] == 15) ? 'Jardinería' :
            (($fila['categoria'] == 16) ? 'Limpieza' :
            (($fila['categoria'] == 17) ? 'Reparación de electrodomésticos' :
            (($fila['categoria'] == 18) ? 'Cerrajería' :
            (($fila['categoria'] == 19) ? 'Construcción' :
            (($fila['categoria'] == 20) ? 'Mantenimiento general' : 'Otro')))))))));
            echo "
<form action='../../controller/modificarServicio.php' method='post'>

    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type='text' class='form-control' name='nombre' value='" . $fila['nombre'] . "'></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type='text' class='form-control' name='precio' value='" . $fila['precio'] . "'></td>
        </tr>
        <tr>
            <td>Cantidad</td>
            <td><input type='text' class='form-control' name='duracion' value='" . $fila['duracion'] . "'></td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>
                <select name='categoria' class='form-control'>
                    <option value=''>" . $categoria . "</option>
                    <option value='11'>Carpintería</option>
                    <option value='12'>Fontanería</option>
                    <option value='13'>Electricidad</option>
                    <option value='14'>Pintura</option>
                    <option value='15'>Jardinería</option>
                    <option value='16'>Limpieza</option>
                    <option value='17'>Reparación de electrodomésticos</option>
                    <option value='18'>Cerrajería</option>
                    <option value='19'>Construcción</option>
                    <option value='20'>Mantenimiento general</option>
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
                <select name='estado' class='form-control'>
                    <option value=''>" . $estado . "</option>
                    <option value='0'>Agotado</option>
                    <option value='1'>Disponible</option>
                    <option value='2'>Pendiente</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type='hidden' name='id_servicio' value='" . $id_servicio . "'></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type='submit' value='Modificar servicio'></td>
        </tr>
    </table>

</form>";

        }
        
    }else {
        echo"error";
    }
}
?>
