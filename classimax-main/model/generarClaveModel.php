<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpMailer/Exception.php';
require '../phpMailer/PHPMailer.php';
require '../phpMailer/SMTP.php';

class GenerarClave{

    public function enviarNuevaClave($identificacion, $email){
        $f = null;

        $objConexion = new conexion();
        $conexion = $objConexion->get_conexion();

        $consultar = "SELECT * from user where Identificacion=:identificacion and Email=:email";

        $result = $conexion->prepare($consultar);

        $result->bindParam(":identificacion", $identificacion);
        $result->bindParam(":email", $email);
        
        $result->execute();

        $f = $result->fetch();
            if($f){
                //Gerenamos la nueva clase a partir de un codigo aleatorio
                $caracteres = "0123456789abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ";
                $longitud = 8;
                $newPass = substr(str_shuffle($caracteres),0,$longitud); 

                $claveMd = md5($newPass);

                $actualizarClave = "UPDATE user Set clave=:claveMd where Identificacion=:identificacion";

                $result = $conexion->prepare($actualizarClave);

                $result->bindParam(":identificacion", $identificacion);
                $result->bindParam(":claveMd", $claveMd);

                $result->execute();



                                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = 0;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'YLBB.soporte@gmail.com';                     //SMTP username
                    $mail->Password   = 'gchxknlyjvykedum';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    // emisor
                    $mail->setFrom('YLBB.soporte@gmail.com', 'Soporte tecnico YLBB');
                    // receptor
                    $emailFor=$f['Email'];
                    $mail->addAddress($emailFor);     //Add a recipient
                    // $mail->addAddress('ellen@example.com');               //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                    //Conten
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = 'Reasignacion de contraseña';
                    $mail->Body    = '
                    <head>
                    <style>
        body {
            font-family:  "Poiret One", cursive;
            background-color: #BDD0FF;
            margin: 0;
            padding: 0;
            border-radius: 30px;
            
        }

        .container {
            width: 600px;
            background-color: #fff;
            border: 5px solid #009245;
            border-radius: 10px;
            margin: 0 auto;
        }

        h2 {
            color: #009245;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            padding: 20px 0;
            font-family: "Varela Round", sans-serif;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        table {
            width: 100%;

        }

        table td {
            padding: 20px;
        }

        .message {
            color: #888;
            font-size: 14px;
            text-align: center;
        }

        .footer {
            background-color: #fff;
            text-align: center;
            color: #888;
            font-family:  "Poiret One", cursive;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" class="container">
        <tr>
            <td>
                <h2>Recuperación de Contraseña</h2>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                                        <td align="center" 
                                            style="padding: 20px 0 20px 0; color: #000000; font-size: 28px; font-weight: bold; ">
                                            <img src="https://github.com/Andercmdsena/imagenes/blob/main/Mi%20proyecto.png?raw=true" alt="" width="120"
                                                height="120" style="display: block;" />
                                        </td>
                                    </tr>
                    <tr>
                   
                        <td>
                            <p style="color: #888; font-size: 22px; padding-top: 30px; text-align: center;">Hola '.$f['Nombres'].' '.$f['Apellidos'].', tu nueva clave de acceso para el rol de '.$f['rol'].' es:</p>
                           <span> <p style="color: #000; font-size: 25px; padding-top: 30px; text-align: center;">'.$newPass.'</p></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="footer">
                &reg; Your Little Big Business - 2023<br />
                <a href="https://www.youtube.com/@codingnow6059" target="_blank" style="color: #888">
                </a>
            </td>
        </tr>
    </table>
</body>
</html>
        
     '
                    
                 

                    ;
                  

                    $mail->send();
                    echo '<script> alert("Mensaje enviado") </script>';
                    echo"<script> location.href='../theme/login.php'</script>";
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }
            else{
                echo'<script> alert("Los datos no se encuentrar en el sistema")</script>';
                echo"<script> location.href='../views/administrador/page-reset-password.php'</script>";
            }
        
    }

}


?>