<?php
// Incluye la biblioteca TCPDF
require('tcpdf.php');
require_once("../model/conexion.php");
require_once("../model/consultas.php");

// Crea una instancia de TCPDF
$pdf = new TCPDF();

// Establece el título del documento y margen
$pdf->SetTitle('Recibo');
$pdf->SetMargins(10, 10, 10);

// Agrega una página
$pdf->AddPage();

// Define el contenido del recibo
date_default_timezone_set('America/Bogota');


session_start();

$arg_id_usuario = $_SESSION['id'];

// Función para cargar los productos del carrito y devolver una cadena HTML
function cargarProductoCarrito() {
    global $arg_id_usuario, $pdf;

    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarRecibo($arg_id_usuario); // Utiliza la función mostrarRecibo para obtener los datos

    $tablaHTML = '
    

    <tr class="table-dark">
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Total</th>
        <th>Nombre del vendedor</th>
        <th>Telefono del vendedor</th>
        
    </tr>';

    if (!empty($result)) {
        foreach ($result as $f) {
            $descripcion = (strlen($f['descripcion']) > 100) ? substr($f['descripcion'], 0, 100) . "..." : $f['descripcion'];
            $cliente = $f['nombre'];
            $tablaHTML .= '
            <tr class="table-dark">
                <td>' . $f['nombre'] . '</td>
                <td>' . $descripcion. '</td>
                <td>' . $f['cantidad'] . '</td>
                <td>' . $f['precio'] . '</td>
                <td>' . $f['nombre_emprendedor'] . '</td>
                <td>' . $f['telefono_emprendedor'] . '</td>
            </tr>';
        }
    } else {
        $tablaHTML .= '
        <tr class="table-dark">
            <td colspan="4">No hay productos registrados</td>
        </tr>';
    }

    return $tablaHTML;
}
function resivo() {
    global $arg_id_usuario, $pdf;

    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarRecibo($arg_id_usuario); // Utiliza la función mostrarRecibo para obtener los datos


    if (!empty($result)) {
        $numeroAleatorio = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
        foreach ($result as $f) {
            $descripcion = (strlen($f['descripcion']) > 100) ? substr($f['descripcion'], 0, 100) . "..." : $f['descripcion'];
            $cliente = $f['Nombre'];
            $email = $f['Email'];
            $telefono = $f['Telefono'];
            $email_emprendedor = $f['email_emprendedor'];
            $telefono_emprendedor = $f['telefono_emprendedor'];
            $nombre_emprendedor=  $f['nombre_emprendedor'];
            $contenido = '

    <h1>Recibo</h1>
    <p> Fecha: '. date('d/m/Y') .' </p>
    <p> Fecha: '. date('H:i:s') .' </p>
    <h2 style="text-align: center;">ID: ' . $numeroAleatorio . ' </h2>
    <h2>Factura a:</h2>
    <h3>' . $cliente . '</h3>
    <p>
        <b><i>Correo: </i></b>' . $email . '  <br>
        <b><i>Cel: </i></b> ' . $telefono . '
    </p>
    <br>
    <h2>Emprendimiento:</h2>
    <p>
        <b><i>Dueño: </i></b> ' . $nombre_emprendedor . ' <br>
        <b><i>Correo: </i></b> ' . $email_emprendedor . ' <br>
        <b><i>Cel: </i></b> ' . $telefono_emprendedor . '
    </p>

    <table border="1" class="table table-striped" style="padding:5px 10px">
        ' . cargarProductoCarrito() . '
    </table>

    

    <h2>Metodo de pago</h2>
    <p><strong>con tarjeta débito</strong> <br>
        <strong>Nombre del banco:</strong> bancolombia <br>
        <strong>Nombre de la cuenta:</strong>' . $cliente . '<br>
        <strong>número de cuenta:</strong> *********123
    </p>
';
        }
    } else {
        $contenido .= '
        <tr class="table-dark">
            <td colspan="4">No hay productos registrados</td>
        </tr>';
    }

    return $contenido;
}
resivo();


// Agrega el contenido al documento
$pdf->writeHTML(resivo(), true, false, true, false, '');

// Genera el PDF y lo muestra en el navegador
$pdf->Output('recibo.pdf', 'I');
?>
