<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLBB | You Little Big Business</title>
    <link href="images/Mi proyecto.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/stylepasarela2.css" rel="stylesheet">
    
</head>
<body style="margin:0px; padding:0px;">

 <header>
    <div class="cabecera">
        <img src="images/Mi proyecto.png" alt="">
</div>





</header> 
<a href="index.php" style="margin-left:20px" class="back-to-home-button">Volver al inicio</a>
    

<div class="container">
    <article>
        <h1>Finalizar compra</h1>
        <form action="../controller/pedido.php" method="POST">
            <div class="form-group">
                <h3>1. Información de contacto</h3>
                <label for="nombre">Email <img class="logona"src="images/user2.png" alt=""></label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="nombre">Télefono    <img class="logona"src="images/telefono2.png" alt=""></label>
                <input type="text" id="telefono" name="nombre" required>
            </div>
            <div class="form-group">
                 <h3>2. Información del envío</h3>
                    <label for="nombre">Dirección <img class="logona" src="images/casa2.png" alt=""></label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="nombre">Localidad <img class="logona" src="images/castillo.png" alt=""></label>
                    <input type="text" id="telefono" name="nombre" required>
                    <label for="nombre">Barrio <img class="logona" src="images/barrio2.png" alt=""></label>
                    <input type="text" id="telefono" name="nombre" required>
            </div>
            <div class="form-group">
                 <h3>3. Método de pago</h3>
                 <div class="bb">
                 <label class="form-check" > 
                              <img class="logone" src="images/nequi.png" alt=""> 
                             </label>
                             <input class="radio" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                             <label class="form-check">
                              Tarjeta de credito
                             </label>
                     <input class="radio" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> 
                        <div class="container2">
                            <h4>Tarjeta de credito</h4>
                            <input type="text" id="credit-card-input" placeholder="Número de tarjeta de crédito" oninput="detectCardBrand(this)">
                                <img id="credit-card-image" alt="Franquicia de la Tarjeta" src="">


                                <button class="botonpagar" id="pagar" type="submit">Pagar</button>

                                
                         </div>
                 </div>
            </div>
               
            
            
        </form>
        </article>
        <div>
            <article
            style="background: #ddd">
                You-little-big-business °2023
            </article>
        </div>

     
  
</div>
    <script>

       
        function detectCardBrand(input) {
            const cardNumber = input.value.replace(/\D/g, ''); 

            if (/^4/.test(cardNumber)) {
                cardBrand = 'visa';
            } else if (/^5[1-5]/.test(cardNumber)) {
                cardBrand = 'mastercard';
            } else if (/^3[47]/.test(cardNumber)) {
                cardBrand = 'amex';
            } else {
                cardBrand = 'unknown';
            }

            const cardImage = document.getElementById('credit-card-image');
            cardImage.style.display = 'block';

            switch (cardBrand) {
                case 'visa':
                    cardImage.src = 'images/visa-logo-2.png';
                    break;
                case 'mastercard':
                    cardImage.src = 'images/mastercard.png';
                    break;
                case 'amex':
                    cardImage.src = 'images/american.jpg';
                    break;
                default:
                    cardImage.style.display = 'none';
            }
        }
    </script>

</body>

  
</html>


</div>
    
</body>
</html>
