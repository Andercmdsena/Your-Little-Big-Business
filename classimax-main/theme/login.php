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
  <title>YLBB | You Little Big Business</title>

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


</head>
<?php include("../components/header.php") ?>

<body class="body-wrapper">

  <section id="content-main" class="login container w-100 p-4 mt-4">
    <div class="row m-auto w-100 p-4">
      <div class="col-lg-5 border p-0">
        <h3 style="background-color: #bdd0ff; font-family: 'Poiret One', cursive;font-size: 1.5rem; font-weight: 600;"
          class="p-4 text-center w-100">Ingresar</h3>

        <form class="py-4 text-center formulario_registro" action="../controller/iniciarSesion.php" method="post">
          <fieldset class="p-4 ">
            <input name="email" id="correo" onkeyup="validarCorreo()" style="font-size:1.2rem; font-weight:600; font-family: 'Poiret One', cursive;"
              class="form-control mb-3" type="text" placeholder="Email" required>
              <p id="mensajeError" style="color: red; display: none; font-size:1.2rem; font-weight:600; font-family: 'Poiret One', curs   ive;;">¡Falta una dirreción de correo!</p>
            <input name="clave" style="font-size:1.2rem; font-weight:600; font-family: 'Poiret One', cursive;"
              class="form-control mb-3" type="password" placeholder="Contraseña" required>
              <div class="form-group col-md-9">
                <label style="font-weight:600;">Rol</label>
                <select name="tipo_de_rol" id="" class="form-control font-weight-bold">
                      <option value="cliente">Cliente</option>
                      <option value="emprendedor">Emprendedor</option>
                      <option value="administrador">Administrador</option>
                </select>
              </div>
            <button id="btn-ingresar"  type="submit" class="btn font-weight-bold w-75 mt-3"  >Ingresar</button>
            <a style="font-family: 'Poiret One', cursive; font-size:1.2rem; font-weight:600"
              class="mt-3 d-block text-primary text-center" href="../views/administrador/page-reset-password.php">Olvidaste tu contraseña?</a>
            <a style="font-family: 'Poiret One', cursive; font-size:1.2rem; font-weight:600"
              class="my-3 d-block text-primary text-center" href="register.php">Registrate ahora</a>
              <div class="d-flex w-75 m-auto">
                <hr class="border border-secondary w-50">
                <p style="font-weight: 600;" class="mx-2">O</p>
                <hr class="border border-secondary w-50">
              </div>
          </fieldset>
        </form>
      </div>
      <div class="col-lg-7 d-none d-lg-flex align-items-center">
        
      <img id="ilustracion_login" class="img-fluid" src="images/login/Team meeting_Monochromatic 2.png" alt="">
      </div>
    </div>


  </section>

  <!--============================
=            Footer            =
=============================-->



  <!-- 
Essential Scripts
=====================================-->


<script>
let formulario = document.getElementsByClassName("formulario_registro")[0];
let correoInput = document.getElementById('correo');
let mensajeError = document.getElementById('mensajeError');

correoInput.addEventListener('input', function(event) {
    // Realiza la validación en tiempo real
    let correo = correoInput.value;
    let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexCorreo.test(correo)) {
        mensajeError.style.display = 'block';
    } else {
        mensajeError.style.display = 'none';
    }
});

formulario.addEventListener('submit', function(event) {
    // Realiza la validación antes de enviar el formulario
    let correo = correoInput.value;
    let regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexCorreo.test(correo)) {
        mensajeError.style.display = 'block';
        event.preventDefault(); // Detiene el envío del formulario si la validación no pasa
    } else {
        mensajeError.style.display = 'none';
        // Continúa con el envío del formulario si la validación es exitosa
    }
});



    

      

</script>

















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

  <!-- controlador de login con Google -->
  <script src="js/script.js"></script>
  <script type="module" src="../controller/firebase/signIn.js"></script>

</body>

</html>