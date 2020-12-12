<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESIONES-COLOR</title>
    <link rel="stylesheet" href="estiloSesiones.css">   
</head>
<body>
    <header>
        <h2 id="centrado">Control de colores</h2>
        <h4 id="centrado">Usando session</h4>
    </header>
    <section>
        <form action="colores.php" method="POST" name="frmColores">
            <table width="400" height="120" cellspacing="10" cellpadding="0">
                <tr>
                    <td>
                        <table>
                            <tr width="200" cellspacing="0" cellpadding="0">
                                <td>Seleccione color de fondo</td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="selFondo" onchange="this.form.submit()">
                                        <option value="selecc">(Seleccione)</option>
                                        <option value="azul">Azul</option>
                                        <option value="verde">Verder</option>
                                        <option value="rojo">Rojo</option>
                                        <option value="negro">Negro</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <?php
                        error_reporting(0);
                        $colores = array('Azul'=>'#0000FF','Verde'=>'00FF00','Rojo'=>'#FF0000','Negro'=>'#000000');
                        $color = $_POST['selFondo'];
                        $_SESSION['fondo'] = $colores[$color];
                        $fondo = $_SESSION['fondo'];
                    ?>
                    <td style(bgcolor="<?php echo $fondo; ?>")>El color seleccionado es: <?php echo $color; ?></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h5 id="centrado">Todos los derechos reservados @2020</h5>
    </footer>
</body>
</html>