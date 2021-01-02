<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <h1 style="color: orange">Formularios</h1>
    <p style="color: blue">
        La página PHP que procesa los dos datos ingresados en el formulario. El dato ingresado en el <b>textarea</b> se rescata en forma idéntica que los controles text, es decir mediante el vector asociativo <b style="color: red">$_REQUEST</b>
    </p>
    <hr>
    <?php
        echo "<h3 style=\"color:green\">El nombre ingresado: </h3>".$_REQUEST['nombre'];
        echo "<br>";
        echo "<h3 style=\"color:green\">El curriculum:</h3>".$_REQUEST['curriculum'];
    ?>
</body>
</html>