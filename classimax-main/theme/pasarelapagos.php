<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLBB | You Little Big Business</title>
    <link href="images/Mi proyecto.png" rel="shortcut icon">
    <link href="css/stylepasarela2.css" rel="stylesheet">
    
</head>
<body>

 <header>
    <div class="cabecera">
        <img src="images/Mi proyecto.png" alt="">
</div>





</header> 
<a href="index.php" class="back-to-home-button">Volver al Inicio</a>
    

<div class="container">
    <article>
        <h1>Finalizar compra</h1>
        <form action="procesar_pago.php" method="POST">
            <div class="form-group">
                <h3>1. Informacion de contacto</h3>
                <label for="nombre">Email</label>
                <input type="text" id="nombre" name="nombre" required>
                <label for="nombre">Telefono</label>
                <input type="text" id="telefono" name="nombre" required>
            </div>
            <div class="form-group">
                 <h3>2. Informacion del envio</h3>
                    <label for="nombre">Direccion</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <label for="nombre">Localidad</label>
                    <input type="text" id="telefono" name="nombre" required>
                    <label for="nombre">Barrio</label>
                    <input type="text" id="telefono" name="nombre" required>
            </div>
            <div class="form-group">
                 <h3>3. Metodo de pago</h3>
                 <div class="bb">
                 <label class="form-check" >
                              Nequi
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

                                <button type="submit"><a class="botonpagar" href="../TCPDF-main/prueba.php" target="_blank">Pagar</a></button>
                         </div>
                 </div>
            </div>
               
            
            
        </form>
        </article>
        <div>
            <article>
                You-little-big-business °2023
            </article>
        </div>

     
  
</div>
    <script>
        function detectCardBrand(input) {
            const cardNumber = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            let cardBrand = '';

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
                    cardImage.src = 'images/amx.png';
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