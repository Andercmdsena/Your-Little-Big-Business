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

<style>
  .text-center a {

font-weight: bolder;
color: #000 !important;
font-size: 20px;
text-decoration: none !important;
list-style: none;
border-radius: 1px solid;
border: 1px solid black;
border-radius: 20px;
padding: 8px;
}
.text-center a:hover {

font-weight: bolder;
background-color: #ddd !important;

text-decoration: none !important;
list-style: none;

}
.text-center p {

font-weight: bolder;
color: #000 !important;
font-size: 20px;
text-decoration: none !important;
list-style: none;
border-radius: 1px solid
;
}

i{
  position: relative !important;
  top:0px !important;
}

.copyright p {
color: white !important;


}
</style>
<?php include("../components/header.php") ?>
    <!-- capturar nombre de usuario -->
    <script>
      let userName = <?php echo json_encode($nameUser); ?>;
    </script>

<!--================================
=            Page Title            =
=================================-->
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Sobre nosotros</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<section class="section contenido_us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="about-img">
          <img src="images/admins/about.jpg" class="img-fluid w-100 rounded" alt="">
        </div>
      </div>
      <div class="col-lg-6 pt-5 pt-lg-0" >
        <div class="about-content">
          <h3 class="font-weight-bold" id="h3_us">Introducción</h3>
          <p>Detrás de cada línea de código, cada diseño cuidadosamente elaborado y cada función innovadora, se encuentra nuestro dedicado equipo de desarrollo en Your Little Big Business. Somos un grupo apasionado de profesionales creativos y amantes de la tecnología que se unen con un propósito: hacer que tu experiencia en nuestra plataforma sea excepcional. </p>
          <br>
          <br>
          
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="heading text-center text-capitalize font-weight-bold py-5"  id="equipo">
          <h2>Nuestro equipo</h2>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card my-3 my-lg-0">
          <img class="card-img-top personas" src="images/admins/personas.png" class="img-fluid w-100" alt="Card image cap">
          <div class="card-body bg-gray text-center">
            <h5 class="card-title">Anderson Tovar</h5>
            <p class="card-text">Fundador/Desarollador</p>
            <a href="https://andercmdsena.github.io/portafolio_final/" target="_blank">Portafolio</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card my-3 my-lg-0">
          <img class="card-img-top personas" src="images/admins/personas.png  " class="img-fluid w-100" alt="Card image cap">
          <div class="card-body bg-gray text-center">
            <h5 class="card-title">Juan Alvis</h5>
            <p class="card-text">Fundador/Desarollador</p>
            <a href="#" >Portafolio</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card my-3 my-lg-0">
          <img class="card-img-top personas" src="images/admins/samuel.jpeg" class="img-fluid w-100" alt="Card image cap">
          <div class="card-body bg-gray text-center">
            <h5 class="card-title">Samuel Diaz</h5>
            <p class="card-text">Fundador/Desarollador</p>
            <a href="#">Portafolio</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="card my-3 my-lg-0">
          <img class="card-img-top personas" src="images/admins/simon.jpg" class="img-fluid w-100" alt="Card image cap">
          <div class="card-body bg-gray text-center">
            <h5 class="card-title">Simon Peralta</h5>
            <p class="card-text">Fundador/Desarollador</p>
            <a href="#">Portafolio</a>
          </div>
        </div>
      </div>
      <div  class="col-lg-3 col-sm-6 division">
        <div class="card my-3 my-lg-0">
          <img class="card-img-top personas" src="images/admins/edison.jpeg" class="img-fluid w-100 separacion" alt="Card image cap">
          <div class="card-body bg-gray text-center">
            <h5 class="card-title">Edison Ramirez</h5>
            <p class="card-text">Fundador/Desarollador</p>
            <a href="#">Portafolio</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
        
      </div>
      <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
        <div class="counter-content text-center bg-light py-4 rounded">
          <i class="fa fa-user-o d-block"></i>
          
          
          <span class="counter my-2 d-block"><?php include_once("../controller/contarUsuarios.php")  ?></span>
          <h5>Miembros activos</h5>
          
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
        <div class="counter-content text-center bg-light py-4 rounded">
          <i class="fa fa-bookmark-o d-block"></i>
          <span class="counter my-2 d-block"><?php include_once("../controller/contarProductos.php")  ?></span>
          <h5>Productos activos</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 my-lg-0 my-3">
        
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



</body>

</html>