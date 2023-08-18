<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo movimiento</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>ABM con PHP y MYSQL</h1>
            <h2>TP 11 - UNJU - PHP INTERMEDIO</h2>
            <div class="consigna">
                <p>Ingresar los datos del NUEVO FAMILIAR</p>
            </div>
        </div>
        <a href="./index.php">Volver a HOME</a>
    </header>

    <main>
        <div class="formulario">
            <form action="insertFam.php" method="POST">
                <div class="campos">

                    <div class="mb-3">
                        <label for="nombre">Nombre y Apellido</label>
                        <input type="text" name="nombre" id="nombre">
                    </div>

                    <div class="mb-3">
                        <label for="rol">Rol</label>
                        <select class="form-select" aria-label="Rol" name="rol">
                            <option value="" selected disabled>Selecciona el rol familiar</option>
                            <option value="padre/madre">Padre/Madre</option>
                            <option value="hijo/hija">Hijo/Hija</option>
                            <option value="otro/otra">Otro/Otra</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Agregar familiar</button>
            </form>
        </div>
    </main>

    <footer>
        <h5>Cesar Alavila | © Argentina Programa 2023</h5>
        <h6>PHP INTERMEDIO | Universidad Nacional de Jujuy</h6>
    </footer>

</body>

</html>