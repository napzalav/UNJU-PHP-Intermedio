<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 5</title>
</head>
<body>
    <h1>“Programación Orientada a Objetos”</h1>

    <?php include 'menu.php'; ?>

    <h3>Consigna 4</h3>
    <p>Crear un programa que permita obtener 4 notas, el nombre del alumno y calcular la nota final teniendo en cuenta los siguientes porcentajes.</p>
    <ul>
        <li>Nota 1…..15%</li>
        <li>Nota 2…..20%</li>
        <li>Nota 3…..25%</li>
        <li>Nota 4…..40%</li>
    </ul>

    <p>La sumatoria de los porcentajes de estas notas es igual a la nota final. La clase debe estar estructurada de la siguiente manera:</p>
    <p>Nombre de la clase: Alumno</p>
    <p>Propiedades:</p>
    <ul>
        <li>nombreAlumno</li>
        <li>nota1</li>
        <li>nota2</li>
        <li>nota3</li>
        <li>nota4</li>
        <li>notaFinal</li>
    </ul>
    <p>Metodos:</p>
    <ul><li>calcularNotaFinal()</li></ul>

    <h3>***********DESARROLLO***********</h3>
    <form action="desarrollo4.php" method="post">
        <label for="nombre">Nombre del alumno: </label>
        <input type="text" name="nombre" required>
        <br>
        <br>

        <label for="nota1">Nota1</label>
        <input type="number" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota2</label>
        <input type="number" name="nota2" id="nota2" required><br>
        <label for="nota3">Nota3</label>
        <input type="number" name="nota3" id="nota3" required><br>
        <label for="nota4">Nota4</label>
        <input type="number" name="nota4" id="nota4" required>
        <br>
        <br>

        <input type="submit" name="submit" value="Calcular nota final">
    </form>

</body>
</html>