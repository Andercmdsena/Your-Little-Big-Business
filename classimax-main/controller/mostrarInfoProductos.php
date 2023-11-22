<?php
function cargarProducto() {
    $arg_id_usuario = $_SESSION['id'];
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProducto($arg_id_usuario);

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    } else {
        foreach ($result as $f) {
            


$categoria = ($f['categoria'] == 1) ? 'Tecnologia' :
(($f['categoria'] == 2) ? 'Moda' :
(($f['categoria'] == 3) ? 'Salud y belleza' :
(($f['categoria'] == 4) ? 'Deportes' :
(($f['categoria'] == 5) ? 'Bebes y juegos' :
(($f['categoria'] == 6) ? 'Alimentos y bebidas' :
(($f['categoria'] == 7) ? 'Oficina' :
(($f['categoria'] == 8) ? 'Hogar' :
(($f['categoria'] == 9) ? 'Mascotas' :
(($f['categoria'] == 10) ? 'Libros y medios' : 'Otro')))))))));



            $estado = ($f['Disponibilidad'] == 1) ? 'Diponible' : (($f['Disponibilidad'] == 0) ? 'Agotado' : 'Pendiente');
            echo  '
                <tr>
                    <td><img src="../' . $f['foto'] . '" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                    <td>' . $f['nombre'] . '</td>
                    <td>' . $f['precio'] . '</td>
                    <td>' . $f['cantidad'] . '</td>
                    <td>'.$estado.'</td>
                    <td>' . $categoria. '</td>
                    <td>
                        <a href="../../views/emprendedor/modificarProducto.php?id=' . $f['id'] . '" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
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
            $categoria = ($f['categoria'] == 1) ? 'Tecnologia' :
(($f['categoria'] == 2) ? 'Moda' :
(($f['categoria'] == 3) ? 'Salud y belleza' :
(($f['categoria'] == 4) ? 'Deportes' :
(($f['categoria'] == 5) ? 'Bebes y juegos' :
(($f['categoria'] == 6) ? 'Alimentos y bebidas' :
(($f['categoria'] == 7) ? 'Oficina' :
(($f['categoria'] == 8) ? 'Hogar' :
(($f['categoria'] == 9) ? 'Mascotas' :
(($f['categoria'] == 10) ? 'Libros y medios' : 'Otro')))))))));
            $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['nombre'].'</td>
                <td>'.$f['precio'].'</td>
                <td>'.$f['cantidad'].'</td>
                <td>'.$categoria.'</td>
                <td>'.$f['id_emprendedor'].'</td>
                <td>'.$estado.'</td>
                <td>
                <form action="../../controller/modificarProductoAdmin.php" method = "post">
                    <select name="estado" id="" class="form-control">

                                    <option value="'.$estado.'"> <i class="ti-eye"></i> '.$estado.'</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Bloqueado</option>
                                    <option value="2">Pendiente</option>
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
function reportesProductos(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarProducto_usuario();

    if (!isset($result)) {
        echo '<h2>No hay productos registrados</h2>';
    }   else{

        foreach($result as $f){
          $estado = ($f['Estado'] == 1) ? 'Activo' : (($f['Estado'] == 0) ? 'Bloqueado' : 'Pendiente');

        echo  '
            <tr>
                <td>'.$f['nombre'].'</td>
                <td>'.$f['precio'].'</td>
                <td>'.$f['cantidad'].'</td>    
                <td>'.$f['Nombre'].'</td>
                <td>'.$estado.'</td>
            <tr>';
        }
        
    }
}

?>