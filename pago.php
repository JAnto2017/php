<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pag-101</title>
</head>
<body>
    <header>
        <h3 id="centrado">Pago de empleados</h3>
    </header>
    <section>
        <form action="pago.php" method="POST">
            <table>
                <tr>
                    <td>Empleado</td>
                    <td><input type="text" name="txtEmp"></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><input type="text" name="txtHor"></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><input type="text" name="txtTar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
<!-- PHP -->
<?php
    if(!is_numeric($_POST['txtEmp'])){
        echo 'Intro EMPLEADOS';
    }else{
        $empleado = $_POST['txtEmp'];
    }
    if (!is_numeric($_POST['txtHor'])) {
        echo 'Intro HORAS';
    }else {
        $horas = $_POST['txtHor'];
    }
    if (!is_numeric($_POST['txtTar'])) {
        echo 'Intro TARIFA';
    }else {
        $tarifa = $_POST['txtTar'];
    }
    
    $sueldoBruto = $horas * $tarifa;
    $descEssalud = $sueldoBruto * 0.12;
    $descAFP = $sueldoBruto * 0.10;
    $sueldoNeto = $sueldoBruto - $descEssalud - $descAFP;
?>
<!-- PHP -->
                <tr>
                    <td>Empleado</td>
                    <td><?php echo $empleado; ?></td>
                </tr>
                <tr>
                    <td>Horas trabajadas</td>
                    <td><?php echo $horas; ?></td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td><?php echo $tarifa; ?></td>
                </tr>
                <tr>
                    <td>Sueldo bruto</td>
                    <td><?php echo number_format($sueldoBruto,2)." €"; ?></td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td><?php echo number_format($descEssalud,2)." €"; ?></td>
                </tr>
                <tr>
                    <td>Descuento AFP</td>
                    <td><?php echo number_format($descAFP,2)." €"; ?></td>
                </tr>
                <tr>
                    <td>Sueldo Neto</td>
                    <td><?php echo $sueldoNeto." €"; ?></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6 id="centrado">Datos reservados</h6>
    </footer>
</body>
</html>