<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios-3</title>
</head>
<body>
    <h1>Formularios-3</h1>
    <p style="color: blue;">
        Si el <i>checkbox</i> no está seleccionado en el formulario no se crea una entrada en el vector asociativo <b>$_REQUEST</b>, para saber si existe una determinada componente en un vector se emplea la función <b style="color: red"><i>isset</i></b>, si retorna true significa que existe y por lo tanto el <i>checkbox</i> está seleccionado.
    </p>
    <?php
        if (isset($_REQUEST['check1'])) {
            $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "La suma es: ".$suma."<br>";
        }
        if (isset($_REQUEST['check2'])) {
            $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La resta es: ".$resta;
        }
    ?>
</body>
</html>