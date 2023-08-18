<?php
/* Credenciales de acceso a la base de datos*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_movimientos');

/* Attemp to connect to MySQL database */

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//check connection

if($mysqli === false){
    die("ERROR: Could not connect. ");
}
echo "Conexión establecida...";


?>