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

    <h3>Consigna 5</h3>
    <p>Crear una clase llamada TelefonoCelular con las siguientes propiedades: marca, color, sistema operativo, número, numerollamado, estado y haciendollamada. Los métodos van a ser: hacerLlamada, terminarLlamada, apagarCelular y encenderCelular.</p>
    <p>Los valores de los atributos son:</p>
    <table border="1" bgcolor="Cfffff">
        <tr bgcolor="C0C0C0">
            <th>Atributo</th>
            <th>Valores que acepta</th>
        </tr>
        <tr>
            <td>Marca</td>
            <td>Cualquiera del mercado</td>
        </tr>
        <tr>
            <td>Color</td>
            <td>Negro, Azul</td>
        </tr>
        <tr>
            <td>Sistema Operativo</td>
            <td>Android, Iphone</td>
        </tr>
        <tr>
            <td>Numero</td>
            <td>Es el numero de celular</td>
        </tr>
        <tr>
            <td>numerollamado</td>
            <td>Es el número de celular al que en un momento dado se está llamando. Si no se está haciendo una llamada este valor debe estar vacío.</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>Apagado o encendido</td>
        </tr>
        <tr>
            <td>haciendollamada</td>
            <td>Para saber si una llamada está en curso. Si o no</td>
        </tr>
    </table>

    <ol>
        <li>Crear un constructor con parámetros para inicializar los valores de los atributos del objeto a crear. El estado inicial es encendido y haciendollamada en No</li>
        <li>El método hacerllamada debe recibir el número al cual se va a llamar y asignarlo a la propiedad numeroLlamado y debe modificar la propiedad haciendoLlamada a Sí.</li>
        <li>El método terminarLlamada debe modificar las propiedades respectivas.</li>
        <li>El método apagarCelular debe modificar las propiedades respectivas.</li>
        <li>El método encenderCelular debe modificar las propiedades respectivas.</li>
        <li>Cree dos objetos tipo TelefonoCelular llamados celular1 y celular2. Imprima el estado de los dos objetos.</li>
        <li>Debe haber validaciones para por ejemplo no hacer una llamada si el celular está apagado. O hacer otra llamada si está haciendo una llamada.</li>
        <li>Simule el siguiente comportamiento con el celular 1:</li>
        <ul>
            <li>Apague el celular</li>
            <li>Haga una llamada</li>
            <li>Termine la llamada</li>
            <li>Encienda el celular</li>
            <li>Termine la llamada</li>
            <li>Imprima el estado del celular1</li>
        </ul>
        <li>Simule el siguiente comportamiento con el celular2:</li>
        <ul>
            <li>Haga una llamada</li>
            <li>Imprima el estado del celular2</li>
        </ul>
    </ol>

    <h3>***********DESARROLLO***********</h3>

    <form action="desarrollo5.php" method="post">

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca" required><br>

        <label for="color">Color</label>
        <select name="color" id="color" required>
            <option value="Negro">Negro</option>
            <option value="Azul">Azul</option>
        </select><br>

        <label for="so">Sistema Operativo</label>
        <select name="so" id="so" required>
            <option value="Android">Android</option>
            <option value="Iphone">Iphone</option>
        </select><br>

        <label for="numero">TU número de celular</label>
        <input type="number" name="numero" id="numero" required><br>

        <label for="numerollamado">Número al que queremos llamar</label>
        <input type="number" name="numerollamado" id="numerollamado"><br>

        <label for="estado">Estado del celular</label>
        <select name="estado" id="estado" required>
            <option value="Apagado">Apagado</option>
            <option value="Encendido">Encendido</option>
        </select><br>

        <label for="haciendollamada">La llamada esta en curso?</label>
        <select name="haciendollamada" id="haciendollamada" required>
            <option value="SI">SI</option>
            <option value="NO">NO</option>
        </select><br><br>

        <input type="submit" name="submit" value="Enviar">
    </form>

</body>
</html>