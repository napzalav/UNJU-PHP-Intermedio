<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINANZA FAMILIAR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./style.css">

    <!-- <style>
        .wrapper {
            width: 90%;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style> -->

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <header>
        <div class="container-cabecera">
            <h1>ABM con PHP y MYSQL</h1>
            <h2>TP 11 - UNJU - PHP INTERMEDIO</h2>
            <div class="consigna">
                <p>Desarrollo de un sistema de control de movimientos,
                    donde se registren todos los ingresos y egresos de un grupo familiar</p>
                <p>Los registros deben tener en cuenta, la persona que lo efectuó: integrante del
                    grupo familiar registrando su nombre y el rol en la familia (padre/madre, hijo/hija,
                    otro/otra), la fecha, la forma de pago (efectivo, cheque, tarjeta de crédito,
                    transferencia bancaria), el tipo (ingreso, egreso), monto y descripción.
                </p>
            </div>
        </div>
        <!-- <a href="./index.php">Volver a HOME</a> -->
    </header>

    <main>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="tarjetas">
                            <div class="card text-center mb-3">
                                <div class="card-body">
                                    <h3 class="card-title">Movimientos contables</h3>
                                    <a href="./createMov.php" class="btn btn-success pull-right"><i class="fa fa-plus">Agregar nuevo movimiento</i></a>
                                    <a href="./viewMov.php" class="btn btn-primary pull-right"><i class="fa fa-eye">Ver movimientos</i></a>
                                </div>
                            </div>

                            <div class="card text-center mb-3">
                                <div class="card-body">
                                    <h3 class="card-title">Registro de Familiares</h3>
                                    <a href="./createFam.php" class="btn btn-success pull-right"><i
                                            class="fa fa-plus">Agregar nuevo familiar</i></a>
                                    <a href="./viewFam.php" class="btn btn-primary pull-right"><i class="fa fa-eye">Ver
                                            familiares</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <h5>Cesar Alavila | © Argentina Programa 2023</h5>
        <h6>PHP INTERMEDIO | Universidad Nacional de Jujuy</h6>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>