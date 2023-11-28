<?php
require_once("../controller/mostrarCarrito.php");


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLBB - Carrito</title>
</head>
<!-- favicon -->
<link href="images/Mi proyecto.png" rel="shortcut icon">
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/footer.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<body>
    <header>
       <?php
      include("../components/header.php")


      ?>
    </header>


<<<<<<< HEAD

=======
    <h1 style="font-size: 50px; font-weight: bold; padding: 15px 200px;" class="nombreCarrito">CARRITO <img style="width: 48px; height: 48px; margin-right: 10px; margin-bottom: 10px; margin-right:10px;" src="../Uploads/iconos/carrito-de-comprasxdd.png"> </h1>
>>>>>>> 6773887cd39e43d188c410204f60c345e050f8eb

    <main>
      <div >
      <section class="contenidocarrito">
              <?php

              cargarProductoCarrito()
            
              ?>
              <br>
              <a style="font-size: 25px; font-weight: bold; padding: 15px 20px;" class="botonpagar" href="../theme/pasarelapagos.php">Pagar</a>
              <br>
              <br>
              <br>
        </div>
      </section>
      </div>
    </main>        
    




    <footer class="footer section section-sm primero_footer">
    <?php

    include("../components/footer.php")

    ?>
    
      
        <!-- Container End -->
    </footer>
      <!-- Footer Bottom -->
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
</body>
</html>