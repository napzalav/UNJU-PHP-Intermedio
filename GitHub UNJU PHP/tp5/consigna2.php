<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 5</title>
</head>
<body>
    <h1>“Programacion Orientada a Objetos”</h1>

    <?php include 'menu.php'; ?>

    <h3>Consigna 2</h3>
    <p>Crear la clase Empleado y definir como atributos su nombre y sueldo. Como así también un método inicializar que reciba como dato el nombre y sueldo. También plantear un segundo método que imprima el nombre y un mensaje si debe o nopagar impuestos (si el sueldo supera a 45.000 paga impuestos)</p>

    <form action="desarrollo2.php" method="post">
        <label for="nombre">Nombre del empleado</label>
        <input type="text" name="nombre" required>
        
        <br>
        <label for="sueldo">Sueldo</label>
        <input type="number" name="sueldo" required>

        <br>
        <input type="submit" name="enviar">
    </form>
    <br>

</body>
</html>