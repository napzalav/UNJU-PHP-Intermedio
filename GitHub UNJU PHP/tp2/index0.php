<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de imagenes</title>
</head>
<body>
    <?php 
    $imagenes = array(
        '/img/invoker.jpg',
        '/img/kotl.jpg',
        '/img/rubick.jpg'
    );

    foreach ($imagenes as $ruta){
        echo '<img src="'.$ruta.'">';
    }


    ?>

    <?php 
    function cafe($tipo){
        
    }
    ?>

</body>
</html>