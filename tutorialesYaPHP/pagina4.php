<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios-2</title>
</head>
<body>
    <h1>Formularios-2</h1>
    <p>
        El vector <b>$_REQUEST</b> tiene tres componentes. En la componente <b>$_REQUEST['radio1']</b> almacena la cadena <i>suma</i> o <i>resta</i>, según cual sea seleccionado en el formulario.
    </p>
    <hr>
    <!-- php -->
    <?php
    if ($_REQUEST['radio1'] == "suma") {
        $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
        echo "La suma es: ".$suma;
    } else {
        if ($_REQUEST['radio1'] == "resta") {
            $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La suma es:".$resta;
        }
    }
    ?>
    <hr>

    
</body>
</html>