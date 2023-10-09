<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require '../PHPMailer/src/Exception.php';
   require '../PHPMailer/src/PHPMailer.php';
   require '../PHPMailer/src/SMTP.php';
    // Creamos la clase global para las consultas externas
    class consultasE{

        // Creamos la función con el mismo nombre y argumentos
        // que definimos en el controlador
        public function registrarUserE($identificacion, $tipoDoc, $nombres, $apellidos, $email, $telefono, $claveMd, $rol, $estado){

            // Conectamos con la clase conexion

            $objetoConexion = new conexion();
            $conexion = $objetoConexion->get_conexion();

            // Consulta de sql para registrar, tabla, campos y valores 
            $registrar = "INSERT INTO users (identificacion, tipoDoc, nombres, apellidos, email, telefono, claveMd, rol, estado) VALUES (:identificacion, :tipoDoc, :nombres, :apellidos, :email, :telefono, :claveMd, :rol, :estado)";
            $result = $conexion->prepare($registrar);

            $result->bindParam(':identificacion', $identificacion);
            $result->bindParam(':tipoDoc', $tipoDoc);
            $result->bindParam(':nombres', $nombres);
            $result->bindParam(':apellidos', $apellidos);
            $result->bindParam(':email', $email);
            $result->bindParam(':telefono', $telefono);
            $result->bindParam(':claveMd', $claveMd);
            $result->bindParam(':rol', $rol);
            $result->bindParam(':estado', $estado);

            

            $result->execute();

            echo "<script>alert('REGISTRO EXITOSO')</script>";

            // Confirmación email

            $mail = new PHPMailer(true);
            try {
                //Server settings
                // Configuración de acceso al servidor de gmail
                $mail->SMTPDebug = 0;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'botellitasw@gmail.com';                     //SMTP username
                $mail->Password   = 'bnlltszvxjigwniw';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                // Emsisor datos de quien envia el email
                $mail->setFrom('botellitasw@gmail.com', 'Soporte Botellita S&W');
                //Receptor: Datos de quién recibe el email
                $mail->addAddress($email);     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');
            
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);   
                $mail->CharSet="UTF-8";
                //Asunto del email                               //Set email format to HTML
                $mail->Subject = 'Botellita S&W-Confirmación de registro';
                $mail->Body    = '	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
                <head>
                <meta charset="UTF-8">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta name="x-apple-disable-message-reformatting">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta content="telephone=no" name="format-detection">
                <title>Nueva plantilla de correo electrC3B3nico 2023-06-10</title><!--[if (mso 16)]>
                <style type="text/css">
                a {text-decoration: none;}
                </style>
                <![endif]--><!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--><!--[if gte mso 9]>
                <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG></o:AllowPNG>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
                <style type="text/css">
                #outlook a {
                padding:0;
                }
                .ExternalClass {
                width:100%;
                }
                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                line-height:100%;
                }
                .es-button {
                mso-style-priority:100!important;
                text-decoration:none!important;
                }
                a[x-apple-data-detectors] {
                color:inherit!important;
                text-decoration:none!important;
                font-size:inherit!important;
                font-family:inherit!important;
                font-weight:inherit!important;
                line-height:inherit!important;
                }
                .es-desk-hidden {
                display:none;
                float:left;
                overflow:hidden;
                width:0;
                max-height:0;
                line-height:0;
                mso-hide:all;
                }
                @media only screen and (max-width:600px) {p, ul li, ol li, a { line-height:150%!important } h1, h2, h3, h1 a, h2 a, h3 a { line-height:120%!important } h1 { font-size:30px!important; text-align:center } h2 { font-size:26px!important; text-align:center } h3 { font-size:20px!important; text-align:center } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:30px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:26px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-content-body p, .es-content-body ul li, .es-content-body ol li, .es-content-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:13px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button, button.es-button { font-size:20px!important; display:block!important; padding:10px 0px 10px 0px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; max-height:inherit!important } }
                </style>
                </head>
                <body style="width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;font-family:arial,  helvetica, sans-serif;padding:0;Margin:0">
                <div class="es-wrapper-color" style="background-color:#ffffff"><!--[if gte mso 9]>
                <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                <v:fill type="tile" color="#333333"></v:fill>
                </v:background>
                <![endif]-->
                <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#ffffff">
                <tr style="border-collapse:collapse">
                <td valign="top" style="padding:0;Margin:0">
                <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                <tr style="border-collapse:collapse">
                <td align="center" style="padding:0;Margin:0">
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2b2c2c;width:600px" cellspacing="0" cellpadding="0" bgcolor="#2b2c2c" align="center">
                <tr style="border-collapse:collapse">
                <td style="padding:0;Margin:0;padding-top:20px;background-color:#000000" bgcolor="#000" align="left">
                <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                <tr style="border-collapse:collapse">
                <td valign="top" align="center" style="padding:0;Margin:0;width:600px">
                <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                <tr style="border-collapse:collapse">
                <td align="center" style="padding:0;Margin:0;font-size:0px"><a target="_blank" href="https://viewstripo.email/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;text-decoration:underline;color:#DE4A4A;font-size:16px"><img class="adapt-img" src="https://github.com/Fernanda10044/mediosbotellita/blob/main/Logo%20animado.gif?raw=true" alt="Botellita S&W" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" title="Botellita S&W" height="446"></a></td>
                </tr>
                </table></td>
                </tr>
                </table></td>
                </tr>
                </table></td>
                </tr>
                </table>
                <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%">
                <tr style="border-collapse:collapse">
                <td align="center" style="padding:0;Margin:0">
                <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#2b2c2c;width:600px" cellspacing="0" cellpadding="0" bgcolor="#2b2c2c" align="center">
                <tr style="border-collapse:collapse">
                <td style="Margin:0;padding-left:20px;padding-right:20px;padding-top:25px;padding-bottom:30px;background-color:#020202" bgcolor="#020202" align="left">
                <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                <tr style="border-collapse:collapse">
                <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                <tr style="border-collapse:collapse">
                <td class="es-m-txt-c" align="center" style="Margin:0;padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px"><h1 style="Margin:0;line-height:31px;mso-line-height-rule:exactly;font-family:arial, helvetica, sans-serif;font-size:26px;font-style:normal;font-weight:normal;color:#ff9800">Registro de confirmación, bienvenid@ a nuestra tienda virtual ahora puedes realizar tus compras desde la comodidad de tu casa en compañia de tus amigos o familiares.</h1></td>
                </tr>
                <tr style="border-collapse:collapse">
                
                </tr>
                <tr style="border-collapse:collapse">
                <td class="es-m-txt-c" align="center" style="padding:0;Margin:0;padding-left:20px;padding-right:20px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial,  helvetica, sans-serif;line-height:21px;color:#cccccc;font-size:14px"></p></td>
                </tr>
                <tr style="border-collapse:collapse">
                </tr>
                </table></td>
                </tr>
                </table></td>
                </tr>
                </table></td>
                </tr>
                </table></td>
                </tr>
                </table>
                </div>
                </body>
                </html>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                // echo '<script> alert("Se ha enviado el email ")</script>';
                echo "<script>location.href='../views/extras/login.php'</script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            





            echo '<script> location.href="../views/extras/login.php" </script>';








        }
    }

?>