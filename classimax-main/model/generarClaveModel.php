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

        $consultar = "SELECT * from usuario where ID=:identificacion and Email=:email";

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

                $actualizarClave = "UPDATE usuario Set clave=:claveMd where ID=:identificacion";

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
                    $mail->Body    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
                    <head>
                    <meta charset="UTF-8">
                    <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta name="x-apple-disable-message-reformatting">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
                    <meta content="telephone=no" name="format-detection">
                    <title>Trigger Newsletter 2</title><!--[if (mso 16)]>
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
                    .rollover:hover .rollover-first {
                    max-height:0px!important;
                    display:none!important;
                    }

                    *{
                        font-family: "Varela Round", "cursive";
                    }

                    .rollover:hover .rollover-second {
                    max-height:none!important;
                    display:inline-block!important;
                    }
                    .rollover div {
                    font-size:0px;
                    }
                    u ~ div img + div > div {
                    display:none;
                    }
                    #outlook a {
                    padding:0;
                    }
                    span.MsoHyperlink,
                    span.MsoHyperlinkFollowed {
                    color:inherit;
                    mso-style-priority:99;
                    }
                    a.es-button {
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
                    .fondo{
                        background:#e4bcff!important;
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
                    .es-button-border:hover {
                    border-color:#3d5ca3 #3d5ca3 #3d5ca3 #3d5ca3!important;
                    background:#ffffff!important;
                    }
                    .es-button-border:hover a.es-button,
                    .es-button-border:hover button.es-button {
                    background:#ffffff!important;
                    }
                    .es-button-border:hover a.es-button {
                    background:#ffffff!important;
                    border-color:#ffffff!important;
                    }
                    @media only screen and (max-width:600px) {*[class="gmail-fix"] { display:none!important } p, a { line-height:150%!important } h1, h1 a { line-height:120%!important } h2, h2 a { line-height:120%!important } h3, h3 a { line-height:120%!important } h4, h4 a { line-height:120%!important } h5, h5 a { line-height:120%!important } h6, h6 a { line-height:120%!important } h1 { font-size:20px!important; text-align:center; line-height:120%!important } h2 { font-size:16px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h4 { font-size:24px!important; text-align:left } h5 { font-size:20px!important; text-align:left } h6 { font-size:16px!important; text-align:left } .es-header-body h1 a, .es-content-body h1 a, .es-footer-body h1 a { font-size:20px!important } .es-header-body h2 a, .es-content-body h2 a, .es-footer-body h2 a { font-size:16px!important } .es-header-body h3 a, .es-content-body h3 a, .es-footer-body h3 a { font-size:20px!important } .es-header-body h4 a, .es-content-body h4 a, .es-footer-body h4 a { font-size:24px!important } .es-header-body h5 a, .es-content-body h5 a, .es-footer-body h5 a { font-size:20px!important } .es-header-body h6 a, .es-content-body h6 a, .es-footer-body h6 a { font-size:16px!important } .es-menu td a { font-size:14px!important } .es-header-body p, .es-header-body a { font-size:10px!important } .es-content-body p, .es-content-body a { font-size:14px!important } .es-footer-body p, .es-footer-body a { font-size:12px!important } .es-infoblock p, .es-infoblock a { font-size:12px!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3, .es-m-txt-c h4, .es-m-txt-c h5, .es-m-txt-c h6 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3, .es-m-txt-r h4, .es-m-txt-r h5, .es-m-txt-r h6 { text-align:right!important } .es-m-txt-j, .es-m-txt-j h1, .es-m-txt-j h2, .es-m-txt-j h3, .es-m-txt-j h4, .es-m-txt-j h5, .es-m-txt-j h6 { text-align:justify!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3, .es-m-txt-l h4, .es-m-txt-l h5, .es-m-txt-l h6 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-m-txt-r .rollover:hover .rollover-second, .es-m-txt-c .rollover:hover .rollover-second, .es-m-txt-l .rollover:hover .rollover-second { display:inline!important } .es-m-txt-r .rollover div, .es-m-txt-c .rollover div, .es-m-txt-l .rollover div { line-height:0!important; font-size:0!important } .es-spacer { display:inline-table } a.es-button, button.es-button { font-size:14px!important } a.es-button, button.es-button { display:inline-block!important } .es-button-border { display:inline-block!important } .es-m-fw, .es-m-fw.es-fw, .es-m-fw .es-button { display:block!important } .es-m-il, .es-m-il .es-button, .es-social, .es-social td, .es-menu { display:inline-block!important } .es-adaptive table, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .adapt-img { width:100%!important; height:auto!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } .es-social td { padding-bottom:10px } .h-auto { height:auto!important } p, ul li, ol li, a { font-size:16px!important } h2 a { text-align:left } a.es-button { border-left-width:0px!important; border-right-width:0px!important } }
                    </style>
                    </head>
                    <body style="width:100%;height:100%;padding:0;Margin:0">
                    <div class="es-wrapper-color" style="background-color:#FAFAFA"><!--[if gte mso 9]>
                    <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                    <v:fill type="tile" color="#fafafa"></v:fill>
                    </v:background>
                    <![endif]-->
                    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;background-color:#FAFAFA">
                    <tr>
                    <td valign="top" style="padding:0;Margin:0">
                    <table cellpadding="0" cellspacing="0" class="es-content" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
                    <tr>
                    <td class="es-adaptive" align="center" style="padding:0;Margin:0">
                    <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    <tr>
                    <td align="left" style="padding:10px;Margin:0">
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;width:580px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" class="es-header" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top">
                    <tr>
                    <td class="es-adaptive" align="center" style="padding:0;Margin:0">
                    <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#3D5CA3;width:600px" cellspacing="0" cellpadding="0" bgcolor="#BDD0FF" align="center">
                    <tr>
                    <td style="Margin:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px;background-color:#BDD0FF" bgcolor="#BDD0FF" align="left"><!--[if mso]><table style="width:560px" cellpadding="0"
                    cellspacing="0"><tr><td style="width:270px" valign="top"><![endif]-->
                    <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                    <tr>
                    <td class="es-m-p20b" align="left" style="padding:0;Margin:0;width:270px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    
                    </table></td>
                    </tr>
                    </table><!--[if mso]></td><td style="width:20px"></td><td style="width:270px" valign="top"><![endif]-->
                    <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                    <tr>
                    
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td class="es-m-txt-c" align="right" style="padding:0;Margin:0;padding-top:10px"><span class="es-button-border" style="border-style:solid;margin-right:98px;font-size:34px; padding:10px;display:inline-block;border-radius:10px;width:auto;border:none;">Your Little Big Business</span></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table><!--[if mso]></td></tr></table><![endif]--></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table>
                    <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
                    <tr>
                    <td style="padding:0;Margin:0;background-color:#FAFAFA" bgcolor="#fafafa" align="center">
                    <table class="es-content-body fondo" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                    <tr>
                    <td style="padding:0;Margin:0;padding-right:20px;padding-left:20px;padding-top:40px;background-color:transparent;background-position:left top" bgcolor="transparent" align="left">
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:left top" width="100%" cellspacing="0" cellpadding="0" role="presentation">
                    <tr>
                    <td align="center" style="padding:0;Margin:0;padding-top:5px;padding-bottom:5px;font-size:0"><img src="https://github.com/Andercmdsena/imagenes/blob/main/Mi%20proyecto.png?raw=true" alt="" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none" width="100"></td>
                    </tr>
                    <tr>
                    <td align="center" style="padding:0;Margin:0;padding-top:15px;padding-bottom:15px"><h1 style="Margin:0;font-family:arial, "helvetica neue", helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#333333"><strong>Olvidaste tu </strong></h1><h1 style="Margin:0;font-family:arial, "helvetica neue", helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:20px;font-style:normal;font-weight:normal;line-height:24px;color:#333333"><strong>&nbsp;contraseña?</strong></h1></td>
                    </tr>
                    <tr>
                    <td align="left" style="padding:0;Margin:0;padding-right:40px;padding-left:40px; text-align:center"><p style="Margin:0;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:24px;letter-spacing:0;color:#666666;font-size:16px;text-align:center">HI,&nbsp;'.$f['Nombres'].' '.$f['Apellidos'].'</p></td>
                    </tr>
                    <tr>
                    <td align="left" style="padding:0;Margin:0;padding-left:40px;padding-right:35px; text-align:center"><p style="Margin:0;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:24px;letter-spacing:0;color:#666666;font-size:16px;text-align:center">Hubo un cambio en tu contraseña para el rol de '.$f['rol'].' !</p></td>
                    </tr>
                    <tr>
                    <td align="center" style="padding:0;Margin:0;padding-right:40px;padding-left:40px;padding-top:25px"><p style="Margin:0;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:24px;letter-spacing:0;color:#666666;font-size:16px">Si no realizó esta solicitud, simplemente ignore este correo electrónico. De lo contrario, esta es su nueva contraseña:</p></td>
                    </tr>
                    <tr>
                    <td align="center" style="Margin:0;padding-top:40px;padding-right:10px;padding-bottom:40px;padding-left:10px; font-size:25px; color:black">'.$newPass.'</td>
                    </tr>
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    <tr>
                    <td style="padding:0;Margin:0;padding-top:20px;padding-right:10px;padding-left:10px;background-position:center center" align="left"><!--[if mso]><table style="width:580px" cellpadding="0" cellspacing="0"><tr><td style="width:199px" valign="top"><![endif]-->
                    <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left">
                    <tr>
                    <td align="left" style="padding:0;Margin:0;width:199px">
                    <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center center" width="100%" cellspacing="0" cellpadding="0" role="presentation">
                    <tr>
                    <td class="es-m-txt-c" align="right" style="padding:0;Margin:0;padding-top:15px"><p style="Margin:0;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:24px;letter-spacing:0;color:#666666;font-size:16px"><strong>Siguenos:</strong></p></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table><!--[if mso]></td><td style="width:20px"></td><td style="width:361px" valign="top"><![endif]-->
                    <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right">
                    <tr>
                    <td align="left" style="padding:0;Margin:0;width:361px">
                    <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-position:center center" width="100%" cellspacing="0" cellpadding="0" role="presentation">
                    <tr>
                    <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:5px;font-size:0">
                    <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><img src="https://sggsgv.stripocdn.email/content/assets/img/social-icons/rounded-gray/facebook-rounded-gray.png" alt="Fb" title="Facebook" width="32" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"></td>
                    <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><img src="https://sggsgv.stripocdn.email/content/assets/img/social-icons/rounded-gray/x-rounded-gray.png" alt="X" title="X.com" width="32" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"></td>
                    <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><img src="https://sggsgv.stripocdn.email/content/assets/img/social-icons/rounded-gray/instagram-rounded-gray.png" alt="Ig" title="Instagram" width="32" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"></td>
                    <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><img src="https://sggsgv.stripocdn.email/content/assets/img/social-icons/rounded-gray/youtube-rounded-gray.png" alt="Yt" title="Youtube" width="32" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"></td>
                    <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><img src="https://sggsgv.stripocdn.email/content/assets/img/social-icons/rounded-gray/linkedin-rounded-gray.png" alt="In" title="Linkedin" width="32" style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table><!--[if mso]></td></tr></table><![endif]--></td>
                    </tr>
                    <tr>
                    <td style="Margin:0;padding-right:20px;padding-bottom:20px;padding-left:20px;padding-top:5px;background-position:left top; background:#BDD0FF;" align="left">
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td align="center" style="padding:0;Margin:0"><p style="Margin:0;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;letter-spacing:0;color:#666666;font-size:14px">Contactanos: <a target="_blank" style="mso-line-height-rule:exactly;text-decoration:none;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:14px;color:#666666" href="tel:123456789">321322132112</a> | <a target="_blank" href="mailto:YLBB.soporte@gmail.com" style="mso-line-height-rule:exactly;text-decoration:none;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:14px;color:#666666">Your Little Big Businnes</a></p></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table></td>
                    </tr>
                    </table>
                    <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important;background-color:transparent;background-repeat:repeat;background-position:center top">
                    <tr>
                    <td style="padding:0;Margin:0;background-color:#FAFAFA" bgcolor="#fafafa" align="center">
                    <table class="es-footer-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" bgcolor="transparent" align="center">
                    <tr>
                    <td align="left" style="Margin:0;padding-right:20px;padding-left:20px;padding-bottom:5px;padding-top:15px">
                    <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    <tr>
                    <td valign="top" align="center" style="padding:0;Margin:0;width:560px">
                    <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                    
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
                    </html>'
                    
                 

                    ;
                    echo '<script> alert("Enviando correo...") </script>';
                  

                    $mail->send();
                    echo '<script> alert("Correo enviado") </script>';
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