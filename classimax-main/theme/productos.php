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
							<div class="xds">
							<


							</div>	
							<form metho="get">
                                <input class="busquedas" type="text" name="buscar">
                                <input class="busqueda" type="submit" value="Buscar">
                            </form>
							</div>
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
					<h4 class="widget-header" style="font-weight: bold; margin-bottom: 10px;">Todas</h4>

<form id="filtroForm" method="get" style="max-width: 300px; margin: 0 auto; padding: 20px; background-color: #f8f9fa; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<label for="categoria" style="display: block; margin-bottom: 10px; font-weight: bold; color: black; font-size:20px">Selecciona una categoría:</label>
<select name="categoria" id="categoria" style="width: calc(100% - 20px); padding: 10px; margin-bottom: 20px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; font-weight: bold; color: black; ">
<option value="" style="font-weight: bold; color: black;">Categoría</option>
    <option value="1" style="font-weight: bold; color: black;">Tecnologia</option>
    <option value="2" style="font-weight: bold; color: black;">Moda</option>
    <option value="3" style="font-weight: bold; color: black;">Salud y belleza</option>
    <option value="4" style="font-weight: bold; color: black;">Deportes</option>
    <option value="5" style="font-weight: bold; color: black;">Bebes y juegos</option>
    <option value="6" style="font-weight: bold; color: black;">Alimentos y bebidas</option>
    <option value="7" style="font-weight: bold; color: black;">Oficina</option>
    <option value="8" style="font-weight: bold; color: black;">Hogar</option>
    <option value="9" style="font-weight: bold; color: black;">Mascotas</option>
    <option value="10" style="font-weight: bold; color: black;">Libros y medios</option>
    <option value="11" style="font-weight: bold; color: black;">Otra</option>
    <!-- Otras opciones... -->
</select>
</select>
<button type="submit" style="background-color: #8ca4e2; color: #000; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; font-size: 14px; margin-top: 20px;">Filtrar</button>
</form>
</div>




				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							
							


						

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
							
						</div>
					</div>
				</div>
				<div class="product-grid-list">
				<div class="row product-item bg-light">
				
							<?php
							
							  if (isset($_GET['categoria']) && $_GET['categoria'] !== '') {
								// El formulario de categoría ha sido enviado con una categoría seleccionada, se filtra por esa categoría
								filtroCategoria($_GET['categoria']);
							} elseif (isset($_GET['buscar']) && $_GET['buscar'] !== '') {
								// El formulario de búsqueda ha sido enviado con un término de búsqueda, se filtra por esa búsqueda
								buscarProducto($_GET['buscar']);
							} else {
								// Ni formulario de categoría ni formulario de búsqueda especificados, carga la publicación de servicios normalmente
								cargarPublicacion();
							}

							?>
			
			
				</div>
							<!-- product card -->
							
			

						
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