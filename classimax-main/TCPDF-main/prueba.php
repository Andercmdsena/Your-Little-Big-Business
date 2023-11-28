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
function cargarProductoCarrito($result) {
    global $pdf;

    $tablaHTML = '
    <tr class="table-dark">
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Nombre del vendedor</th>
        <th>Telefono del vendedor</th>
    </tr>';

    if (!empty($result)) {
        $totalPrecio = 0;
        foreach ($result as $f) {
            $descripcion = (strlen($f['descripcion']) > 100) ? substr($f['descripcion'], 0, 100) . "..." : $f['descripcion'];
            $cliente = $f['nombre'];

            // Suma el valor de $f['precio'] al totalPrecio
            $totalPrecio += $f['precio'];

            $id_producto = $f['id']; 
            $cantidad = $f['cantidad_carrito']; 
            $objConsulta = new Consultas();
            $resultRestar = $objConsulta->restarEmprendedor($id_producto, $cantidad);

            $id_Usuario = $f['ID']; 
            $objConsulta = new Consultas();
            $resultRestar = $objConsulta->resetearCarrito($id_Usuario, $id_producto);

            $tablaHTML .= '
            <tr class="table-dark">
                <td>' . $f['nombre'] . '</td>
                <td>' . $f['cantidad_carrito'] . '</td>
                <td>' . $f['precio'] . '</td>
                <td>' . $f['nombre_emprendedor'] . '</td>
                <td>' . $f['telefono_emprendedor'] . '</td>
            </tr>';
        }

        $iva = $totalPrecio * 0.19;

        $tablaHTML .= '
        <tr class="table-dark">
            <td colspan="2"></td>
            <td><strong>Neto: ' . number_format($totalPrecio, 2, ',', '.') . '</strong></td>
            <td><strong>IVA (19%): ' . number_format($iva, 2, ',', '.') . '</strong></td>
            <td><strong>Total (con IVA): ' . number_format(($totalPrecio + $iva), 2, ',', '.') . '</strong></td>
        </tr>';
    } else {
        $tablaHTML .= '
        <tr class="table-dark">
            <td colspan="4">No hay productos registrados</td>
        </tr>';
    }

    return $tablaHTML;
}

   

function resivo($result) {
    global $pdf;

    if (!empty($result)) {
        $numeroAleatorio = str_pad(mt_rand(1, 999999999999), 12, '0', STR_PAD_LEFT);
        foreach ($result as $f) {
            $cliente = $f['Nombre'];
            $email = $f['Email'];
            $telefono = $f['Telefono'];
            $email_emprendedor = $f['email_emprendedor'];
            $telefono_emprendedor = $f['telefono_emprendedor'];
            $nombre_emprendedor =  $f['nombre_emprendedor'];
            $contenido = '
    <h1>Recibo</h1>
    <p> Fecha: ' . date('d/m/Y') . ' </p>
    <p> Hora: ' . date('H:i:s') . ' </p>
    <h2 style="text-align: center;">ID: ' . $numeroAleatorio . ' </h2>
    <h2>Factura a:</h2>
    <h3>' . $cliente . '</h3>
    <p>
        <b><i>Correo: </i></b>' . $email . '  <br>
        <b><i>Cel: </i></b> ' . $telefono . '
    </p>
    <br>
    <table border="1" class="table table-striped" style="padding:5px 10px">
        ' . cargarProductoCarrito($result) . '
    </table>
    <h2>Metodo de pago</h2>
    <p><strong>con tarjeta débito</strong> <br>
        <strong>Nombre del banco:</strong> bancolombia <br>
        <strong>Nombre de la cuenta:</strong>' . $cliente . '<br>
        <strong>número de cuenta:</strong> *********123
    </p>';
        }
    } else {
        $contenido .= '
        <tr class="table-dark">
            <td colspan="4">No hay productos registrados</td>
        </tr>';
    }

    return $contenido;
}

// Llama a mostrarRecibo una vez
$objConsulta = new Consultas();
$result = $objConsulta->mostrarRecibo($arg_id_usuario);

// Agrega el contenido al documento
$pdf->writeHTML(resivo($result), true, false, true, false, '');
ob_end_clean(); // Desactiva el búfer de salida
$pdf->Output('recibo.pdf', 'I');
?>
