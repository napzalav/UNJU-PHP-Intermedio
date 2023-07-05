<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>“PILARES DE LA PROGRAMACIÓN ORIENTADA A OBJETOS”</h1>
    
    <?php include 'menu.php'; ?>
    
    <h3>Consigna 1</h3>
    <p>Cargar a través de un formulario los datos de un postulante para un puesto de trabajo. Los datos son los siguientes:</p>
    <ul>
        <li>Nombre y Apellido</li>
        <li>Fecha de nacimiento</li>
        <li>Dirección</li>
        <li>Sexo</li>
        <li>Disponibilidad (medio tiempo o full time)</li>
        <li>Puesto (informática, contable, rrhh)</li>
        <li>Cargar CV (archivo de cualquiera de los 3 tipos: .pdf, .doc, .jpg)</li>
    </ul>
    <p>Al enviar el formulario, mostrar por pantalla un mensaje de confirmación:</p>
    <p>"El postulante [Nombre y Apellido] se inscribió en el puesto [Puesto]".</p>

    <h3>***********DESARROLLO***********</h3>

    <?php include 'formulario.php'; ?>

</body>
</html>