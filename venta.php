<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
    <link rel="stylesheet" href="estiloVenta.css">
</head>
<body>
    <header>
        <h2 id="centrado">Venta de productos</h2>
        <h2 id="centrado">Piezas de ordenadores</h2>
        <img src="bannerVenta.jpg" alt="Imagen del bloque ventas">
    </header>
    <section>
        <form method="POST">
            <!-- Tabla de ingresos -->
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Nº Venta:</td>
                    <td><?php echo generaCodigo(); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Fecha:</td>
                    <td><?php echo muestraFecha(); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Hora:</td>
                    <td><?php echo muestraHora(); ?></td>
                </tr>
                <tr>
                    <td>Producto</td>

                    <td><select name="selProducto" onchange="this.form.submit()">
                        <option value="Teclado" <?php echo $teclado; ?>>Teclado multimedia</option>
                        <option value="Ratón" <?php echo $raton; ?>>Ratón óptico</option>
                        <option value="Impresora" <?php echo $impresora; ?>>Impresora color</option>
                        <option value="Disco Duro" <?php echo $disco; ?>>Disco duro</option>
                        <option value="Lector DVD" <?php echo $lectora; ?>>Lector DVD</option>
                    </select></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad" value="<?php echo getCantidad(); ?>"></td>
                    <td>Precio:</td>
                    <td id="codigo"><?php echo number_format(asignaPrecio(getProducto()),2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="PROCESAR"></td>
                    <td></td>
                </tr>
            </table>
            <!-- PHP -->
            
            <!-- Tabla de impresión de resulados -->
            <table>
                <tr>
                    <td>NÚMERO:</td>
                    <td><?php echo generaCodigo(); ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>FECHA:</td>
                    <td><?php echo muestraFecha(); ?></td>
                    <td>HORA:</td>
                    <td><?php echo muestraHora(); ?></td>
                </tr>
                <tr>
                    <td>PRODUCTO:</td>
                    <td colspan="3"><?php echo getProducto(); ?>/td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>CANTIDAD:</td>
                    <td><?php echo getCantidad(); ?></td>
                    <td>PRECIO:</td>
                    <td><?php echo number_format(asignaPrecio(getProducto()),2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>SUBTOTAL</td>
                    <td><?php $subtotal = calculaSubtotal(asignaPrecio(getProducto()),getCantidad()); echo number_format($subtotal,'2'); ?> </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DESCUENTO</td>
                    <td><?php $descuento = calculaDescuento($subtotal); echo number_format($descuento,'2'); ?></td>
                    <td>NETO A PAGAR</td>
                    <td id="codigo"><?php $neto = calculaNeto($subtotal,$descuento); echo number_format($neto,'2'); ?></td>
                </tr>
            </table>
        </form>
    </section>
</body>
</html>