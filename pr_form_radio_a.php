<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-servidor</title>
</head>
<body>
    <?php
        if ($_REQUEST['radio1'] == "suma") {
            $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
            echo "La suma es:".$suma;
        } elseif ($_REQUEST['radio1'] == "resta") {
            $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
            echo "La resta es:".$resta;
        }
    ?>
</body>
</html>