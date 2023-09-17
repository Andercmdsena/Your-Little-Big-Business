<?php include_once("../controller/Main.php")  ?>

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
  <title>YLBB | You little big business</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/logoylbb.png" rel="shortcut icon">

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
							<div class="form-group col-xl-4 col-lg-3 col-md-6">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<select class="w-100 form-control my-2 my-lg-0">
									<option>Categoria</option>
<<<<<<< HEAD:classimax-main/theme/category.php
									<option value="1">Mejor valorado</option>
=======
									<option value="1">Mas relevantes</option>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
									<option value="2">Menor precio</option>
									<option value="4">Mayor precio</option>
								</select>
							</div>
							<div class="form-group col-lg-3 col-md-6">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-xl-2 col-lg-3 col-md-6">

								<button type="submit" class="btn btn-primary active w-100">Buscar</button>
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
<<<<<<< HEAD:classimax-main/theme/category.php
				<div class="search-result bg-gray">
					<h2>Resultados</h2>
					<p></p>
=======
				<div class="search-result bg-gray " id="resultados">
					<h2>Resultados para tu "busqueda"</h2>
					<p>123 resultadps en 12 Diciembre, 2017</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
<<<<<<< HEAD:classimax-main/theme/category.php
					<div class="widget category-list">
	<h4 class="widget-header">Todas las categorias</h4>
	<ul class="category-list">
		<li><a href="category.html">Portatiles <span>93</span></a></li>
		<li><a href="category.html">Iphone <span>233</span></a></li>
=======
					<div class="widget category-list categorias">
	<h4 class="widget-header">Todas</h4>
	<ul class="category-list">
		<li><a href="category.html">Computadores <span>93</span></a></li>
		<li><a href="category.html">Celulares <span>233</span></a></li>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		<li><a href="category.html">Microsoft  <span>183</span></a></li>
		<li><a href="category.html">Monitores <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
<<<<<<< HEAD:classimax-main/theme/category.php
	<h4 class="widget-header">Localidades</h4>
	<ul class="category-list">
		<li><a href="category.html">Kennedy<span>93</span></a></li>
		<li><a href="category.html">Engativa<span>233</span></a></li>
		<li><a href="category.html">Bosa<span>183</span></a></li>
		<li><a href="category.html">Suba<span>120</span></a></li>
		<li><a href="category.html">Puente aranda<span>40</span></a></li>
		<li><a href="category.html">Ciudad bolivar<span>81</span></a></li>
=======
	<h4 class="widget-header">Lugares</h4>
	<ul class="category-list">
		<li><a href="category.html">Kennedy <span>93</span></a></li>
		<li><a href="category.html">Patio bonito <span>233</span></a></li>
		<li><a href="category.html">Santa fe  <span>183</span></a></li>
		<li><a href="category.html">Suba <span>120</span></a></li>
		<li><a href="category.html">Barrios unidos <span>40</span></a></li>
		<li><a href="category.html">12 de octubre <span>81</span></a></li>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	</ul>
</div>

<div class="widget filter">
	<h4 class="widget-header">Mostrar productos</h4>
	<select>
<<<<<<< HEAD:classimax-main/theme/category.php
		<option>Popularidad</option>
		<option value="1">Mejor valorado</option>
		<option value="2">Menor precio</option>
		<option value="4">Mayor precio</option>
=======
		<option>Populares</option>
		<option value="1">Top ventas</option>
		<option value="2">Precio mas bajo</option>
		<option value="4">Precio mas alto</option>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	</select>
</div>

<div class="widget price-range w-100">
<<<<<<< HEAD:classimax-main/theme/category.php
	<h4 class="widget-header">Rango de precios</h4>
=======
	<h4 class="widget-header">Rango de precio</h4>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="1.000.000" data-slider-step="#"
						data-slider-value="[0,1.000.000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">$0 - $1.000.000</span>
				</div>
	</div>
</div>

<div class="widget product-shorting">
<<<<<<< HEAD:classimax-main/theme/category.php
	<h4 class="widget-header">Condicion del producto</h4>
=======
	<h4 class="widget-header">Condiciones</h4>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Nuevo
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
<<<<<<< HEAD:classimax-main/theme/category.php
	    Poco usado
=======
	    Usado
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
<<<<<<< HEAD:classimax-main/theme/category.php
	  Usado
=======
	    Poco uso
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
<<<<<<< HEAD:classimax-main/theme/category.php
	    Desgaste
=======
	    Casi nuevo
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
	  </label>
	</div>
</div>

				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
<<<<<<< HEAD:classimax-main/theme/category.php
							<strong>Filtrar</strong>
=======
							<strong>Filtro</strong>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
							<select>
								<option>Mas reciente</option>
								<option value="1">Mas popular</option>
								<option value="2">Menor precio</option>
								<option value="4">Mayor precio</option>
							</select>
						</div>
						<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
							<div class="view">
<<<<<<< HEAD:classimax-main/theme/category.php
								<strong>Ver</strong>
=======
								<strong>Visitas</strong>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
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
					<div class="row mt-30">
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/celular.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Para el hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplex</p>
=======
		    <h4 class="card-title"><a href="single.html">Celular inteligente</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Tecnologia</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>11 de enero</a>
		    	</li>
		    </ul>
		    <p class="card-text">Potencia y estilo en tu mano: un teléfono inteligente de calidad y para todo .</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/libro.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Combo de mesa de estudio</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Estanteria</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Mesa de estudio con combo de mesa de noche</p>
=======
		    <h4 class="card-title"><a href="single.html">Libro de negocios</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Libros</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>2 de febrero</a>
		    	</li>
		    </ul>
		    <p class="card-text">Descubre estrategias probadas en este libro de negocios. Obtén ideas frescas para alcanzar el éxito.</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/bicicleta.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o">Para el hogar</i></a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplexe</p>
=======
		    <h4 class="card-title"><a href="single.html">Bicicleta</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>23 de agosto</a>
		    	</li>
		    </ul>
		    <p class="card-text">Libertad sobre ruedas: una bicicleta que combina rendimiento para explorar el mundo..</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/portatil.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Para el hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplex</p>
=======
		    <h4 class="card-title"><a href="single.html">Computador gamer</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Tecnologia</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de Julion</a>
		    	</li>
		    </ul>
		    <p class="card-text">La laptop GAMER: Experimenta un rendimiento sin igual en un diseño portátil.</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/auto.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Combo de mesa de estudio</a></h4>
=======
		    <h4 class="card-title"><a href="single.html">Auto</a></h4>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Refacciones</a>
		    	</li>
		    	<li class="list-inline-item">
<<<<<<< HEAD:classimax-main/theme/category.php
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Mesa de estudio con combo de mesa de noche</p>
=======
		    		<a href="category.html"><i class="fa fa-calendar"></i>26th Deciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Refacciones para automoviles y todo en refacciones para tus arreglos y mejoras</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/muebles.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Para el hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplex</p>
=======
		    <h4 class="card-title"><a href="single.html">Cocinas</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Muebles</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>24th Agosto</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cocinas para todo tipo de hogar y espacios con cualquier diseño</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/ropa.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Para el hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplex</p>
=======
		    <h4 class="card-title"><a href="single.html">Busos</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Ropa</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>15th Junio</a>
		    	</li>
		    </ul>
		    <p class="card-text">Busos de todos los colores tamaños y diseños</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/teclado.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Combo de mesa de estudio</a></h4>
=======
		    <h4 class="card-title"><a href="single.html">Teclado</a></h4>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Perifericos</a>
		    	</li>
		    	<li class="list-inline-item">
<<<<<<< HEAD:classimax-main/theme/category.php
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Mesa de estudio con combo de mesa de noche</p>
=======
		    		<a href="category.html"><i class="fa fa-calendar"></i>1th Enero</a>
		    	</li>
		    </ul>
		    <p class="card-text">Todo tipo de teclados, como mecanicos, membrana y opticos</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
						<div class="col-lg-4 col-md-6">
							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/mouse.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
<<<<<<< HEAD:classimax-main/theme/category.php
		    <h4 class="card-title"><a href="single.html">Cama</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Para el hogar</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>26 de diciembre</a>
		    	</li>
		    </ul>
		    <p class="card-text">Cama multiplex</p>
=======
		    <h4 class="card-title"><a href="single.html">Mouse</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Perifericos</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="category.html"><i class="fa fa-calendar"></i>30th Octuble</a>
		    	</li>
		    </ul>
		    <p class="card-text">Mouse con mas 12000 dpi de sensibilidad y sensor optico</p>
>>>>>>> d1f62d5cfa4e2d14ae3bd63f13e2546151b9a78a:classimax-main/theme/productos.php
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



						</div>
					</div>
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