<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Web-PHP</title>
</head>
<body>
    <header>
        <h3>LISTADO DE CASOS</h3>
    </header>
    <section>
        <?php
            for ($i=1; $i <=7; $i++) { 
        ?>
        <p>Caso <?php echo $i; ?> </p>
        <?php
            }
        ?>
    </section>
    <footer>
        <h6>Todos los derechos reservados</h6>
    </footer>
</body>
</html>