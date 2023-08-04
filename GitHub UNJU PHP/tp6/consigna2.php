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

    <h3>Consigna 2</h3>
    <p>Usando herencia realice dos clases una Postulante y la otra Empleado, que hereden de la clase Persona.</p>
    <ul>
        <li>Los datos de la clase Postulante son los mismos que se ingresan por formulario en el punto 1.</li>
        <ul>
            <li>Esta clase debe permitir calcular la edad del postulante.</li>
        </ul>
    </ul>
    <ul>
        <li>Los datos que se guardan de la clase Empleado son:</li>
        <ul>
            <li>Nombre y Apellido</li>
            <li>Fecha de nacimiento</li>
            <li>Dirección</li>
            <li>Sexo</li>
            <li>Disponibilidad (medio tiempo o full time)</li>
            <li>Puesto (informática, contable, rrhh)</li>
            <li>Fecha de ingreso</li>
            <li>Esta clase debe permitir calcular los años de antigüedad del empleado</li>
        </ul>
    </ul>

    <h3>***********DESARROLLO***********</h3>

    <div class="formulario-container">
        <?php
        echo '<form class="formulario" action="desarrollo2.php" method="post" enctype="multipart/form-data">';
        //echo '<h2>POSTULANTE</h2>';

        include 'formulario.php';

        echo '<label for="ingreso">Fecha de ingreso</label>';
        echo '<input type="date" name="ingreso" required><br>';

        echo '<label for="cv">Cargar CV (.pdf, .doc, .jpg)</label>';
        echo '<input type="file" name="cv" id="cv" accept=".pdf, .doc, .jpg" required><br>';

        echo '<br>';
        echo '<input type="submit" name="enviar" value="Enviar">';
        echo '</form>';
        echo '<br>';
        ?>

        <?php /*
        echo '<form class="formulario" action="desarrollo2.php" method="post" enctype="multipart/form-data">';
        echo '<h2>EMPLEADO</h2>';

        include 'formulario.php';

        echo '<label for="ingreso">Fecha de ingreso</label>';
        echo '<input type="date" name="ingreso" required><br>';

        echo '<br>';
        echo '<input type="submit" name="enviar" value="Enviar">';
        echo '</form>';
        echo '<br>';
        */
        ?>

    </div>
</body>
</html>