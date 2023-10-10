<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YLBB | You Little Big Business</title>
    <link href="images/Mi proyecto.png" rel="shortcut icon">
    <link href="css/stylepasarela.css" rel="stylesheet">
</head>
<body>
<a href="index.php" class="back-to-home-button">Volver al Inicio</a>
    

<div class="container">
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
                 <label class="form-check-label" for="exampleRadios1">
                              Nequi
                             </label>
                     <input class="radio" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> 
                         
                 </div>
            </div>
               
            
            <button type="submit">Pagar</button>
        </form>
    </div>
</body>
</html>


</div>
    
</body>
</html>