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
                <p>Ingresar los datos del NUEVO MOVIMIENTO</p>
            </div>
        </div>
        <a href="./index.php">Volver a HOME</a>
        <a href="./viewMov.php">Ver Movimientos</a>
    </header>

    <main>
    <div class="formulario">
        <form action="insertMov.php" method="POST">
            <div class="campos">
                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha">
                </div>

                <div class="mb-3">
                    <label for="tipo">Tipo</label>
                    <select class="form-select" aria-label="Tipo de movimiento" name="tipo">
                        <option value="" selected disabled>Selecciona el tipo de movimiento</option>
                        <option value="ingreso">INGRESO</option>
                        <option value="egreso">EGRESO</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="descripcion">Descripcion del movimiento</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="monto">Monto</label>
                    <input type="float" class="form-control" id="monto" name="monto">
                </div>

                <div class="mb-3">
                    <label for="pago">Forma de pago</label>
                    <select class="form-select" aria-label="pago" name="forma_de_pago">
                        <option value="" selected disabled>Selecciona la forma de pago</option>
                        <option value="efectivo">Efectivo</option>
                        <option value="cheque">Cheque</option>
                        <option value="tarjeta de crédito">Tarjeta de crédito</option>
                        <option value="transferencia bancaria">Transferencia bancaria</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="responsable">Responsable</label>
                    <select class="form-select" name="responsable">
                        <option value="" selected disabled>Selecciona al responsable del movimiento</option>
                        <?php

                        require_once "config.php";

                        // Obtener los familiares de la base de datos y crear opciones en el menú desplegable
                        $sqlFamiliares = "SELECT id_familia, nombre FROM familiares";
                        $resultFamiliares = $mysqli->query($sqlFamiliares);

                        while ($rowFamiliar = $resultFamiliares->fetch_assoc()) {
                            echo '<option value="' . $rowFamiliar['id_familia'] . '">' . $rowFamiliar['nombre'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Agregar movimiento</button>
        </form>
    </div>
    </main>

    <footer>
        <h5>Cesar Alavila | © Argentina Programa 2023</h5>
        <h6>PHP INTERMEDIO | Universidad Nacional de Jujuy</h6>
    </footer>

</body>

</html>