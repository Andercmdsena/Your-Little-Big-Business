<?php
function cargarProducto() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProducto($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            echo  '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['precio'] . '</td>
                    <td>' . $f['cantidad'] . '</td>
                    <td>' . $f['Estado'] . '</td>
                    <td>' . $f['categoria'] . '</td>
                    <td>
                        <a href="../../views/administrador/modificarProducto.php?id=' . $f['id'] . '" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="../../controller/eliminarProducto.php?id=' . $f['id'] . '"><i class="ti-trash"></i>Eliminar</a>
                    </td>
                <tr>';
        }
    }
}
function cargarProductoAdmin(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProductoAdmin();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['nombre'].'</td>
                <td>'.$f['precio'].'</td>
                <td>'.$f['cantidad'].'</td>
                <td>'.$f['categoria'].'</td>
                <td>'.$f['id_emprendedor'].'</td>
                <td>
                <form action="../../controller/modificarProductoAdmin.php" method = "post">
                    <select name="estado" id="" class="form-control">
                                    <option value="'.$f['Estado'].'"> <i class="ti-eye"></i> '.$f['Estado'].'</option>
                                    <option value="Bloquedo">Activo</option>
                                    <option value="Bloquedo">Bloquedo</option>
                                    <option value="Pendiente">Pendiente</option>
                    </select>
                    <td>&nbsp;</td>
                    <td><input type="hidden" name = "id_producto" value='.$f['id'].'>
                    <button class="btn btn-light">Actualizar</button>
                    
                    </td>
                    
                    </form>
                </td>
                
            <tr>';
        }
        
    }
}

?>