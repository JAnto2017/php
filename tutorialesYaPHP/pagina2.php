<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><Formularios-1></Formularios-1></title>
</head>
<body>
    <h1>Ejemplo de uso de formulario</h1>
    <p>Para acceder al dato PHP se cuenta con un vector llamado <b>$_REQUEST</b> indicado como subíndice el nombre del cuadro de texto que definimos en el formulario. <i>Dicho nombre es sensible a mayúsculas y minúsculas</i></p>
    <p>Es común indicar entre comillas simples el subíndice en lugar de comillas dobles - con las dobles también funciona -</p>
    <hr>
    <?php
    echo "El valor ingresado es: ";
    echo $_REQUEST['nombre'];
    ?>
</body>
</html>