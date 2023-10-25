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
$cliente = "Cliente de Ejemplo";
$descripcion = "Pago de Servicio";
$monto = "$100.00";

session_start();

$arg_id_usuario = $_SESSION['id'];

// Función para cargar los productos del carrito y devolver una cadena HTML
function cargarProductoCarrito() {
    global $arg_id_usuario, $pdf;

    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarRecibo($arg_id_usuario); // Utiliza la función mostrarRecibo para obtener los datos

    $tablaHTML = '
    <tr class="table-dark">
        <th> Cantidad</th>
        <th> Descripcion</th>
        <th> precio Unitario</th>
        <th> Total</th>
        <th> Nombre</th>
        <th> Email</th>
        <th> Rol</th>
    </tr>';

    if (!empty($result)) {
        foreach ($result as $f) {
            $tablaHTML .= '
            <tr class="table-dark">
                <td>' . $f['nombre'] . '</td>
                <td>' . $f['descripcion'] . '</td>
                <td>' . $f['Estado_producto'] . '</td>
                <td>' . $f['precio'] . '</td>
                <td>'. $f['Nombre'] .'</td>
                <td>'. $f['Email'] .'</td>
                <td>'. $f['Rol'] .'</td>
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

$contenido = '
    <h1>Recibo</h1>
    <p> Fecha: 24/10/2023 </p>
    <h2 style="text-align: center;"> ID: 135486416432245 </h2>
    <h2>Factura a:</h2>
    <h3>' . $cliente . '</h3>
    <p>
        <b><i>Correo: </i></b> juankalvis27@gmail.com <br>
        <b><i>Cel: </i></b> 3145591473
    </p>
    <br>
    <h2>Emprendimiento:</h2>
    <h3>menchi</h3>
    <p>
        <b><i>Dueño: </i></b> Samuel Diaz <br>
        <b><i>Correo: </i></b> 16samu19@gmail.com <br>
        <b><i>Cel: </i></b> 3114550274
    </p>

    <table border="1" class="table table-striped">
        ' . cargarProductoCarrito() . '
    </table>

    <p style="text-align: right;">
        subtotal: ' . $monto . ' <br>
        iva 19%: ' . number_format((floatval($monto) * 0.19), 2, '.', '') . ' <br>
        Total a pagar: ' . number_format((floatval($monto) * 1.19), 2, '.', '') . '
    </p>

    <h2>Metodo de pago</h2>
    <p><strong>con tarjeta débito</strong> <br>
        <strong>Nombre del banco:</strong> bancolombia <br>
        <strong>Nombre de la cuenta:</strong> juan alvis <br>
        <strong>número de cuenta:</strong> *********123
    </p>
';

// Agrega el contenido al documento
$pdf->writeHTML($contenido, true, false, true, false, '');

// Genera el PDF y lo muestra en el navegador
$pdf->Output('recibo.pdf', 'I');
?>
