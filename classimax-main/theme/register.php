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
  <title> YLBB | You Little Big Business</title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="images/Mi proyecto.png" rel="shortcut icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

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


</head>

<body class="body-wrapper" style="font-family: 'Poiret One', cursive;">



<?php include("../components/header.php") ?>

<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center" >
      <img src="images/imagenlogin-registro.png" alt="" style="display: flex; width: 650px; height: 580px;">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border" style="border-radius: 20px;">
          
          <h3 class="bg-gray p-4" style="border-top-left-radius: 20px; border-top-right-radius: 20px; background-color: #BDD0FF;">Registrate</h3>
          <form action="../controller/insertarUs.php" method="post">
            <fieldset class="p-4">
              <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombre" required>
              <input class="form-control mb-3" type="text" name="apellido" placeholder="Apellido" required>
              <input class="form-control mb-3" type="text" name="email" placeholder="Email*" required>
              <input class="form-control mb-3" type="tel" name="telefono" placeholder="Telefono*" required>
              <input class="form-control mb-3" type="password" name="clave" id="clave" placeholder="Contraseña" required>
              <input class="form-control mb-3" type="password" id="con_clave" name="con_clave" placeholder="Confirmar Contraseña" required>
              <select name="rol" id="">
                <option value="Cliente">Cliente</option>
                <option value="Emprendedor">Emprendedor</option>
              </select>
              <div class="loggedin-forgot d-inline-flex my-3">
                <input type="checkbox" id="mostrar_contraseña">
                <label for="">Mostrar  contraseña</label>
                <input type="checkbox" id="registering" class="mt-1">
                <label for="registering" class="px-2">Al registrate acepta nuestros <a class="text-primary font-weight-bold" href="terms-condition.html">Terminos y condiciones</a></label>
              </div>
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Registrate ahora</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  const obt = document.getElementById('mostrar_contraseña');
  const ver = document.getElementById('clave');

  obt.addEventListener("change", function(){
    if (obt.checked){
      ver.type = "text";
    }else{
      ver.type = "password"
    }
  });
  const obt2 = document.getElementById('mostrar_contraseña');
  const ver2 = document.getElementById('con_clave');

  obt2.addEventListener("change", function(){
    if (obt2.checked){
      ver2.type = "text";
    }else{
      ver2.type = "password"
    }
  });
</script>
    
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