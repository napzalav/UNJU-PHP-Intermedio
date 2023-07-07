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
    
    <h3>Consigna 4</h3>
    <p>Implementar el polimorfismo (varias formas de resolver un mismo método) para calcular el sueldo de tres tipos de Empleados:</p>
    
    <p>Empleado Informático:</p>
    <ul>Sueldo = $básico + $xcantidadAplicaciones
        <li>$básico = $200.000</li>
        <li>1-5 aplicaciones = $10.000</li>
        <li>6 o más aplicaciones = $20.000</li>
    </ul>

    <p>Empleado de RRHH:</p>
    <ul>Sueldo = $básico + $xcantidadProyectos
        <li>$básico = $300.000</li>
        <li>1-5 proyectos = $20.000</li>
        <li>6 o más proyectos = $30.000</li>
    </ul>

    <p>Empleado Contable:</p>
    <ul>Sueldo = $básico + $xcantidadExpedientes
        <li>$básico = $100.000</li>
        <li>1-5 proyectos = $50.000</li>
        <li>6 o más proyectos = $80.000</li>
    </ul>

    <p>Muestre el sueldo de un empleado Informático con 10 aplicaciones.</p>
    <p>Sugerencia: Puede utilizar una clase donde estará el método calcSueldo() para su posterior implementación particular por cada tipo de Empleado.</p>

    <h3>***********DESARROLLO***********</h3>

    <form class="formulario" action="desarrollo4.php">
    <?php include 'formulario.php'; ?>

        <label for="ingreso">Fecha de ingreso</label>
        <input type="date" name="ingreso" required><br>

        <label for="cantidad">Cantidad realizada</label>
        <input type="number" name="cantidad" id="cantidad" required><br><br>

        <input type="submit" name="enviar" value="Calcular sueldo">
    </form>

    <!--
        <label for="puesto">Puesto del empleado</label>
            <select name="puesto" id="puesto" required>
                <option value="Informática">Informática</option>
                <option value="RRHH">RRHH</option>
                <option value="Contable">Contable</option>
            </select><br>
-->
</body>
</html>