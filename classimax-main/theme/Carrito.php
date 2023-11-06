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



    <main>
      <section class="contenidocarrito">
              <?php

              cargarProductoCarrito()

              ?>
        </div>
      </section>
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