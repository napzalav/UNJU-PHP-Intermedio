<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Configuracion SMTP para HOTMAIL
    //$mail->Host       = 'smtp.gmail.com';                     //Configuracion SMTP para GMAIL
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    /****************************************** MODIFICAR ESTOS DATOS ***********************************************/
    $mail->Username   = 'tu_email@extension.com';                     //SMTP username
    $mail->Password   = 'tu_contraseña';                               //SMTP password
    /*****************************************************************************************/

    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tu_email@extension.com', 'Tu_nombre'); //Aqui va el remitente, es quien envía el mail, seguido de un nombre opcional
    $mail->addAddress('receptor_email@extension.com');     //Aqui va el email a quien queremos enviar, es el receptor

    //Attachments
    $mail->addAttachment('assets/Practica M2-C4.pdf');         //Agregar al mail un archivo adjunto
    $mail->addAttachment('assets/kotl.jpg');         //Agregar al mail un archivo adjunto

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Argentina Programa 2023';     //Asunto
    $mail->Body    = 'PHPMailer es una clase desarrollada en PHP que trata de facilitar la funcionalidades asociadas a los envíos y manejos de emails. Se basa en el componente active server ASPMail. PHPMailer permite hacer de manera sencilla trabajos complejos, como adjuntar ficheros o realizar envíos de mails con formato HTML. Es muy recomendable realizar los envíos a través del protocolo SMTP';

    $mail->send();
    echo 'El mensaje se envió correctamente';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}

?>