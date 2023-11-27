<?php include_once("../controller/Main.php");
require_once("../controller/publicaciones.php");
require_once ("../controller/mostrarInfoProductos.php");
require_once("../model/conexion.php");
require_once("../model/consultas.php");
?>


<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>YLBB | Productos</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/Mi proyecto.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/header/header.css">
  <link rel="stylesheet" href="css/footer/footer.css">




</head>

<body class="body-wrapper">

<?php include("../components/header.php") ?>
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search nice-select-white">
					<form>
						<div class="form-row align-items-center">
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0">
									<option>Relevancia</option>
									<option onclick="filtrar('menor')" value="2">Menor precio</option>
									<option onclick="filtrar('menor')" value="4">Mayor precio</option>
								</select>

							<form metho="get">
                                <input class="busqueda" type="text" name="buscar">
                                <input class="busqueda" type="submit" value="Buscar">
                            </form>
							</div>
								
							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray " id="resultados">
					<h2>Resultados para tu "busqueda"</h2>
					<p>123 resultadps en 12 Diciembre, 2017</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
					<div class="widget category-list categorias">
	<h4 class="widget-header">Todas</h4>
	<ul class="category-list">
		<li><a class="juas" href="category.html">Computadores <span>93</span></a></li>
		<li><a class="juas" href="category.html">Celulares <span>233</span></a></li>
		<li><a class="juas" href="category.html">Microsoft  <span>183</span></a></li>
		<li><a class="juas" href="category.html">Monitores <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Lugares</h4>
	<ul class="category-list">
		<li><a class="juas" href="category.html">Kennedy <span>93</span></a></li>
		<li><a class="juas" href="category.html">Patio bonito <span>233</span></a></li>
		<li><a class="juas" href="category.html">Santa fe  <span>183</span></a></li>
		<li><a class="juas" href="category.html">Suba <span>120</span></a></li>
		<li><a class="juas" href="category.html">Barrios unidos <span>40</span></a></li>
		<li><a class="juas" href="category.html">12 de octubre <span>81</span></a></li>
	</ul>
</div>

<div class="widget filter">
	<h4 class="widget-header">Mostrar productos</h4>
	<select>
		<option>Populares</option>
		<option value="1">Top ventas</option>
		<option value="2">Precio mas bajo</option>
		<option value="4">Precio mas alto</option>
	</select>
</div>

<div class="widget price-range w-100">
	<h4 class="widget-header">Rango de precio</h4>
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="1.000.000" data-slider-step="#"
						data-slider-value="[0,1.000.000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">$0 - $1.000.000</span>
				</div>
	</div>
</div>

<div class="widget product-shorting">
	<h4 class="widget-header">Condiciones</h4>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Nuevo
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Usado
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Poco uso
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Casi nuevo
	  </label>
	</div>
</div>

				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<strong>Filtro</strong>
							<select>
								<option>Mas reciente</option>
								<option value="2">Menor precio</option>
								<option value="4">Mayor precio</option>
							</select>
							<form method="post">
								<button type="submit" name="menor">Menor Precio</button>
								<button type="submit" name="mayor">Mayor Precio</button>
    						</form>


						<?php
							$conexion = new mysqli("localhost", "root", "", "ylbb");

							// Verificar la conexión
							if ($conexion->connect_error) {
								die("Error de conexión: " . $conexion->connect_error);
							}

							if (isset($_POST['menor'])) {
								$consulta = "SELECT * FROM productos ORDER BY precio ASC";
							} elseif (isset($_POST['mayor'])) {
								$consulta = "SELECT * FROM productos ORDER BY precio DESC";
							} else {
								$consulta = "SELECT * FROM productos";
							}

							// Ejecutar la consulta
							$resultados = $conexion->query($consulta);

							// Mostrar los resultados
							if ($resultados->num_rows > 0) {
								while ($fila = $resultados->fetch_assoc()) {
									echo "<p>{$fila['nombre']} - {$fila['precio']}</p>";
								}
							} else {
								echo "<p>No hay productos disponibles.</p>";
							}

							$conexion->close();
						?>

<!--

// Verificar si se hizo clic en alguno de los botones
if (isset($_POST['filtrar_menor'])) {
    // Obtener los valores de precio mínimo y máximo
    $precioMin = isset($_POST['precio_min']) ? $_POST['precio_min'] : null;
    $precioMax = isset($_POST['precio_max']) ? $_POST['precio_max'] : null;

    // Llamar a la función cargarPublicacion con el filtro de precio para Menor Precio
    cargarPublicacion($precioMin, $precioMax, 'menor');
} elseif (isset($_POST['filtrar_mayor'])) {
    // Obtener los valores de precio mínimo y máximo
    $precioMin = isset($_POST['precio_min']) ? $_POST['precio_min'] : null;
    $precioMax = isset($_POST['precio_max']) ? $_POST['precio_max'] : null;

    // Llamar a la función cargarPublicacion con el filtro de precio para Mayor Precio
    cargarPublicacion($precioMin, $precioMax, 'mayor');
} elseif (isset($_POST['menor'])) {
    // Llamar a la función cargarPublicacion con el filtro de precio para Menor Precio sin valores específicos
    cargarPublicacion(null, null, 'menor');
} elseif (isset($_POST['mayor'])) {
    // Llamar a la función cargarPublicacion con el filtro de precio para Mayor Precio sin valores específicos
    cargarPublicacion(null, null, 'mayor');
} else {
    // Si no se hizo clic en ningún botón de filtro, mostrar todos los productos
    cargarPublicacion();
}

 -->

						</div>
						<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
							<div class="view">
								<strong>Visitas</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#!" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
				<div class="row product-item bg-light">
				
							<?php
							
							if(isset($_GET['buscar'])){
								buscarProducto($_GET['buscar']);
							  }else{
								cargarPublicacion();

							  }

							?>
			
			
				</div>
							<!-- product card -->
							
			

						
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="category.html" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Anterior</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="category.html">1</a></li>
							<li class="page-item active"><a class="page-link" href="category.html">2</a></li>
							<li class="page-item"><a class="page-link" href="category.html">3</a></li>
							<li class="page-item">
								<a class="page-link" href="category.html" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Siguiente</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!--============================
=            Footer            =
=============================-->

<?php include("../components/footer.php") ?>


<!-- 
Essential Scripts
=====================================-->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/popper.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/bootstrap/bootstrap-slider.js"></script>
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>

    <!-- capturar nombre de usuario -->
    <script>
      let userName = <?php echo json_encode($nameUser); ?>;
    </script>


</body>

</html>