<?php
//consigna1
//funcion para convertir los datos ingresados por el usuario
function convertirCadena($texto){
    $texto = strtolower($texto); // Convertir a minúsculas
    $texto = ucwords($texto); //Convertir a mayusculas la primera letra de cada palabra

    return $texto;
}

function crearDirectorioUploads() {
    $uploadsDir = 'uploads';
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0755, true);
    }

    $cvPath = $uploadsDir . '/' . $_FILES["cv"]["name"];
    move_uploaded_file($_FILES["cv"]["tmp_name"], $cvPath);

    // para eliminar la imagen almacenada después de mostrarla en pantalla debo descomentar el siguiente codigo y actualizar la pagina
    //unlink($cvPath);
}

// Llamada a la función
//crearDirectorioUploads();

// **1** Crea el directorio(carpeta) "uploads" si no existe (descomentar //****)
    //is_dir — Indica si el nombre de archivo es un directorio https://www.php.net/manual/es/function.is-dir
    //mkdir — Crea un directorio https://www.php.net/manual/es/function.mkdir.php
    //se crea la variable $uploadsDir y se le asigna el nombre "uploads", esta es la carpeta donde se guardan los archivos cargados en el formulario
    //SI no existe el directorio. La funcion is_dir() devuelve un booleano, en este caso está negado, por lo que si el directorio no existe entonces lo creará
    //la funcion mkdir() crea el directorio y recibe como parametros:
    //$uploadsDir que es el nombre del directorio (carpeta) que se va a crear
    //0755 son los permisos asignados al directorio, en este caso el 0755 es común y significa que el propietario tiene permisos completos(de lectura, escritura y ejecucion)
    //"true" es un parametro opcional q indica si se deben crear directorios intermedios en el caso de q no existan. En este caso se crearán automaticamente si son necesarios
//****    $uploadsDir = 'uploads'; 
//****    if (!is_dir($uploadsDir)) { 
//****        mkdir($uploadsDir, 0755, true); 
//****    }

    //mueve un archivo subido a una nueva ubicación, en este caso a la carpeta "uploads": https://www.php.net/manual/es/function.move-uploaded-file.php
    //move_uploaded_file(string $filename, string $destination): bool -> recibe dos parametros:
    //$filename es el nombre de archivo del archivo subido
    //$destination que es el destino a donde se guardará el archivo
    //$cvPath es la variable que almacena la ruta completa donde se movera el archivo cargado dentro de la carpeta "uploads", quedaria de la siguiente manera-> $cvPath = "uploads/archivoCargado.extension" 
//****    $cvPath = $uploadsDir . '/' . $cv; 
//****    move_uploaded_file($_FILES["cv"]["tmp_name"], $cvPath); 


?>