<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLBB - Carrito</title>
</head>
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
            <div>
              <p><h2>Carrito</h2></p>
              <p class="info1">Aquí podras ver los productos en tu carrito</p>
              <hr>
              <div class="productosxd">
                <img src="img/productoSugerido.png" alt="Producto 1">
                  <div class="detallesproducto">
                      <p class="nombreproducto">Teclado gamer</p>
                      <p class="Descripcion">El Teclado Gamer es tu aliado perfecto para conquistar mundos virtuales. Diseñado para la máxima velocidad y precisión, este teclado ofrece teclas retroiluminadas.</p>
                      <p class="disponible">Disponible</p>
                      <p class="precioproducto">$19.000</p>
                      <div class="dropdown-center">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cantidad
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">1</a></li>
                          <li><a class="dropdown-item" href="#">2</a></li>
                          <li><a class="dropdown-item" href="#">3</a></li>
                        </ul>
                        |
                      </div>
                  </div>
              </div>
              <hr>
              <div class="productosxd">
                <img src="img/productoSugerido2.png" alt="Producto 2">
                <div class="detallesproducto">
                    <p class="nombreproducto">Chasis gamer</p>
                    <p class="Descripcion">El Chasis Gamer Corto es la elección perfecta para aquellos entusiastas de los videojuegos que buscan un diseño compacto pero potente.</p>
                    <p class="disponible">Disponible</p>
                    <p class="precioproducto">$200.000</p>
                    <div class="dropdown-center">
                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cantidad
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                      </ul>
                      |
                    </div>
                </div>
              </div>
              <hr>
              <div class="preciototal">
                  Total: $219.000
              </div>
              <button class="botonpagar">Pagar</button>
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