<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPTY</title>
    <link rel="stylesheet" href="estiloEmpty.css">
</head>
<body>
    <header>
        <h2 id="centrado">Validación usando EMPTY</h2>
    </header>
<!-- php -->
<?php
    error_reporting(0);
    $usuario = $_POST['txtUsuario'];
    $clave = $_POST['txtClave'];
    $menUsuario = '';
    $menClave = '';
    if (empty($usuario)) {
        $menUsuario='Ingrese nombre de usuario';
    }
    if (empty($clave)) {
        $menClave='Ingrese clave';
    }
?>
<!-- php -->
    <section>
        <form action="usarEmpty.php" method="POST">
            <table>
            <tr>
            <td>Ingrese usuario</td>
            <td><input type="text" name="txtUsuario" value="<?php echo $_POST['txtUsuario']; ?>"></td>
            <td id="error"><?php echo $menUsuario; ?></td>
        </tr>
        <tr>
            <td>Ingrese clave</td>
            <td><input type="password" name="txtClave" maxlength="4" value="<?php echo $_POST['txtClave']; ?>"></td>
            <td id="error"><?php echo $menUsuario; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Validar"></td>
            <td></td>
        </tr>
            </table>
        </form>
    </section>
</body>
</html>