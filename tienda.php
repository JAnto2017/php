<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página-133</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h2 id="centrado">VENTA PRODUCTOS</h2>
        <img src="productos.jpg" alt="Productos" width="300" height="150">
    </header>
<!-- php -->
<?php
    error_reporting(0);
    $cliente = $_POST['txtCli'];
    $producto= $_POST['selProd'];
    $cantidad= $_POST['txtCant'];
    if ($producto=='_cocina') {
        $selC = 'SELECTED';
    } else {
        $selC = "";
    }
    if ($producto=='_refrig') {
        $selR = 'SELECTED';
    } else {
        $selR = "";
    }
    if ($producto=='_televi') {
        $selT = 'SELECTED';
    } else {
        $selT = "";
    }
    if ($producto=='_lavado') {
        $selL = 'SELECTED';
    } else {
        $selL = "";
    }
    if ($producto=='_radiog') {
        $selA = 'SELECTED';
    } else {
        $selA = "";
    }
?>
<!-- php -->
    <section>
        <br>
        <form action="tienda.php" method="POST">
        <table>
            <tr>
                <td><input type="text" name="txtCli" size="60" value="<?php echo $cliente; ?>"></td>
            </tr>
            <tr>
                <td>Producto</td>
                <td><select name="selProd">
                    <option value="_cocina">Cocina</option>
                    <option value="_refrig">Refrigerador</option>
                    <option value="_televi">Televisión</option>
                    <option value="_lavado">Lavadora</option>
                    <option value="_radiog">Radiograbadora USB</option>
                </select></td>
            </tr>
            <tr>
                <td><input type="text" name="txtCant" value="<?php echo $cantidad; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Procesar"></td>
                <td><input type="reset" value="Limpiar"></td>
            </tr>
<!-- php -->
<?php
    if($producto=='_cocina') $precio=1200;
    if($producto=='_refrig') $precio=2500;
    if($producto=='_televi') $precio=3200;
    if($producto=='_lavado') $precio=1000;
    if($producto=='_radiog') $precio=7000;
    $subtotal = $precio * $cantidad;
    if ($subtotal>1000) {
        $descuento = 10/100.0 * $subtotal;
    }else{
        $descuento = 5/100.0 * $subtotal;
    }
    $monto = $subtotal - $descuento;
?>
<!-- php -->
            <tr>
                <td>Precio del producto</td>
                <td><?php echo number_format($precio,2); ?></td>
            </tr>
            <tr>
                <td>Subtotal a pagar</td>
                <td><?php echo number_format($subtotal,2); ?></td>
            </tr>
            <tr>
                <td>Monto de descuento</td>
                <td><?php echo number_format($descuento,2); ?></td>
            </tr>
            <tr>
                <td>Monto a pagar</td>
                <td><?php echo number_format($monto,2) ?></td>
            </tr>
        </table>
    </form>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados</h6>
    </footer>
</body>
</html>