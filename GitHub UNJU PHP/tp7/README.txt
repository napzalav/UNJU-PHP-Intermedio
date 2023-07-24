************************************************************************************************
Para la consignaFPDF.php se descargó el archivo zip y se descomprimio en la carpeta -libraries-
************************************************************************************************
Para la consignaMailer.php se utiliza composer y utiliza la carpeta -vendor-
************************************************************************************************

Antes de realizar la ejecucion en localhost de consignaMailer.php por favor tenga en cuenta que:

-debe elegir su Host, segun sea hotmail, gmail, outlook, etc, modificar el SMTP:
$mail->Host       = 'smtp.office365.com';

-debe modificar con sus datos el USERNAME y el PASSWORD de la cuenta a la que va a acceder para mandar el mail
$mail->Username   = 'tu_email@extension.com';
$mail->Password   = 'tu_contraseña';

-modificar el emisor y receptor del mail:
$mail->setFrom('tu_email@extension.com', 'Tu_nombre'); //Aqui va el remitente, es quien envía el mail, seguido de un nombre opcional
$mail->addAddress('receptor_email@extension.com');

-los Attachments estan harcodeados con dos archivos, un PDF .pdf y una imagen .jpg que se encuentran almacenados en la carpeta ASSETS dentro del TP7