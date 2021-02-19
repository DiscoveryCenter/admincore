<?php

  @session_start();
  if (!isset($_SESSION['role']) && $_SESSION['role'] != "SuperAdmin" ) {
    # Reedirigir al login si la sesion no existe
     header ("location: ../index.php");
    }
    
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
use PHPMailer\PHPMailer\SMTP; 

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 $mail->CharSet = "UTF-8";

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.discoverycenterpa.net ';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'newsletter@discoverycenterpa.net';                     // SMTP username
    $mail->Password   = 'iQk6aJ5_V_W[';                               // SMTP password
    #$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('newsletter@discoverycenterpa.net', 'Fichas Técnicas');
    $mail->AddCC('dipsa7@discoverycenterpa.com', 'ILIANA FUENMAYOR');
    $mail->AddCC('dipsa8@discoverycenterpa.com', 'DENIA MENDOZA');
    $mail->AddCC('dipsa4@discoverycenterpa.com', 'YADISEL CUCHARRO');
    $mail->AddCC('mayby@discoverycenterpa.com', 'MAYBY HERRERA');
    $mail->AddCC('dipsa15@discoverycenterpa.com', 'MILAGRO TORRES');
    $mail->AddCC('safety1@discoverycenterpa.com', 'ELCID LEZCANO');
    $mail->AddCC('orisvv@muresa.com', 'ORIS VILLARREAL');
    $mail->AddCC('ferminag@discoverycenterpa.com', 'FERMINA GRAEL');
    $mail->AddCC('dipsa10@discoverycenterpa.com', 'MARTA CORTES');
    $mail->AddCC('ventas_dipsa@discoverycenterpa.com', 'HONORIO SAMANIEGO');
    $mail->AddCC('arnulfo@discoverycenterpa.com', 'ARNULFO GONZÁLEZ');
    $mail->AddCC('dipsa2@discoverycenterpa.com', 'YURIBETH CASTILLO');
    $mail->AddCC('dipsa16@discoverycenterpa.com', 'ANARKELIS PATIÑO');
    $mail->AddCC('info@discoverycenterpa.com', 'Info Discovey Center');
    $mail->AddCC('marketing@discoverycenterpa.com', 'Vianka Robles'); 
    $mail->AddCC('fernanl@discoverycenterpa.com', 'Fernan Luque'); 
    $mail->AddCC('eggis@discoverycenterpa.com', 'Eggis'); 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '🔥🔥🔥 Nueva ficha técnica disponible !';
    $mail->Body    = 'El sistema automatizado de gesti&oacute;n de fichas tecnicas FITEC, le informa que ya se encuentra disponible la ficha técnica:<br><br>
    Nombre: <b>'.$nombreProducto.'</b> <br>
    UPC: <b>'.$codigoProducto.'</b> <br>
    Modelo: <b>'.$modeloProducto.'</b> <br>
    Solicitado por: <b>'.$solicitadoPor.'</b> <br>
    Estado del contenido: <b>"'.$estadoProducto.'"</b> <br><br>
    
    Puede visualizar la ficha técnica directamente en este enlace <a href="https://www.discoverycenterpa.net/fitec/fichas/'.$codigoProducto.'.pdf"><b>VER</b></a><br>
    Visualice todas las fichas técnicas en el siguiente enlace <a href="https://www.discoverycenterpa.net/fitec"><b>FiTEC</b></a> con el codigo de acceso: <b>DC1096</b><br><br>

    <b style="color:red;">NOTA:</b> Es responsabilidad única de cada solicitante verificar el contenido de la ficha técnica.<br>
    <b>No compartir el c&oacute;digo</b> de acceso ni reenviar este correo a otras personas ajenas a <b>DISCOVERY CENTER</b>.
    ';


    $mail->send();
   # echo 'Mensaje enviado correctamente';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>