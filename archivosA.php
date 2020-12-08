<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos</title>
</head>
<body>
    <header>
        <h2 id="centrado">VERIFICAR LA EXISTENCIA DE UN ARCHIVO</h2>
    </header>
    <section>
        <?php
            error_reporting(0);
            require 'proceso.php';
        ?>
        <form action="" method="post" name="frmArchivo">
            <table>
                <tr>
                    <td>Nombre de archivo</td>
                    <td><input type="text" name="txtArchivo"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Verificar" name="btnVerificar"></td>
                </tr>
                <?php if(isset($_POST['btnVerificar'])) {?>
                <tr>
                    <td>Nombre completo del archivo</td>
                    <td><?php echo getArchivo(); ?></td>
                </tr>
                <tr>
                    <td>Existe el archivo</td>
                    <td><?php echo verificar(getArchivo()); ?></td>
                </tr>
                <tr>
                    <td>Fecha de última modificación</td>
                    <td><?php echo ultimaModificacion(getArchivo()); ?></td>
                </tr>
                <tr>
                    <td>Tipo de archivo</td>
                    <td><?php echo tipoArchivo(getArchivo()); ?></td>
                </tr>
                <tr>
                    <td>Tamaño en butes</td>
                    <td><?php echo tamanioARchivo(getArchivo()).'Bytes'; ?></td>
                </tr>
                <tr>
                    <td>El Archivo es ejecutable?</td>
                    <td><?php echo esEjecutable(getArchivo()); ?></td>
                </tr>
                <?php } ?>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados</h6>
    </footer>
</body>
</html>