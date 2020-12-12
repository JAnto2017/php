<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario-4</title>
</head>
<body>
    <?php
        if ($_REQUEST['operacion'] == "suma") {
            $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "<p><b>La suma es:</b></p>".$suma;
        } else {
            if ($_REQUEST['operacion'] == "resta") {
                $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
                echo "<p><b>La resta es:</b></p>".$resta;
            }
        }
        
    ?>
</body>
</html>