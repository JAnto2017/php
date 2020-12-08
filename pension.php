<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENSION.PHP</title>
    <link rel="stylesheet" href="estiloPension.css">
</head>
<body>
    <header>
        <h2 id="centrado">PENSION DE ESTUDIANTES</h2>
        <h2 id="centrado">SIMULADOR DE CUOTAS</h2>
        <img src="universo.jpg" alt="imagen visible">
    </header>
    <section>
        <?php error_reporting(0); ?>
        <form method="POST" name="frmPension">
            <!-- tabla ingreso valores -->
            <table>
                <tr>
                    <td>Alumno</td>
                    <td><input type="text" name="txtAlumno" value="<?php echo getAlumno(); ?>"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Promedio ponderado</td>
                    <td><input type="text" name="txtPromedio" value="<?php echo getPromedio(); ?>"></td>
                    <td><input type="submit" value="PROCESAR" name="btnProcesar"></td>
                </tr>
            </table>
            <!-- PHP -->
            <?php
                $categoria = function($promedio){
                    if ($promedio > 17) {
                        return "A";
                    }elseif ($promedio >= 14) {
                        return "B";
                    }elseif ($promedio >= 12) {
                        return "C";
                    }else {
                        return "D";
                    }
                };
            ?>
            <?php if(isset($_POST["btnProcesar"])) { ?>
            
            <!-- tabla resumen categoría -->
            <table>
                <tr>
                    <td>Alumno</td>
                    <td><?php echo getAlumno(); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Promedio</td>
                    <td><?php echo getPromedio(); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Categoría</td>
                    <td><?php echo $categoria(getPromedio()); ?></td>
                    <td></td>
                </tr>
            </table>
            <!-- php -->
            <?php
                $pension = function($categoria){
                    if ($categoria == "A") {
                        return 550;
                    }elseif ($categoria == "B") {
                        return 650;
                    }elseif ($categoria == "C") {
                        return 750;
                    }elseif ($categoria == "D") {
                        return 800;
                    }else{
                        return '';
                    }
                };
                $fecha = function(){ return date('d/m/Y'); };
                $cuotas = function(){ return 5; };
            ?>

            <!-- tabla resumen de pensiones -->
            <table>
                <tr>
                    <td>RESUMEN DE CUOTAS</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>MONTO PENSIONES</td>
                    <td><?php echo number_format($pension($categoria(getPromedio())),'2','.',''); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>FECHA ACTUAL</td>
                    <td><?php echo $fecha(); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td>NÚMERO DE CUOTAS</td>
                    <td><?php echo $cuotas(); ?></td>
                    <td></td>
                </tr>
            </table>

            <!-- tabla posibles fechas y cuotas -->
            <table>
                <tr>
                    <td colspan="2">RESUMEN DE FECHAS Y CUOTAS</td>
                </tr>
                <tr>
                    <td>Fechas</td>
                    <td>Monto por cuota</td>
                </tr>
                <!-- php -->
                <?php 
                    for ($i=1; $i<=$cuotas(); $i++) { 
                        $montoTotal += $pension($categoria(getPromedio()));
                    }
                ?>
                <tr>
                    <td>
                        <?php
                        $f = $fecha();
                        echo date('d/m/Y',strtotime("$f +$i month"));
                        ?>
                    </td>
                    <td>
                        <?php
                            echo number_format($pension($categoria(getPromedio())),'2','.',''); 
                        ?>
                    </td>
                <?php } ?>
                    <td></td>
                </tr>
                <tr>
                    <td>Total por semestre</td>
                    <td><?php echo number_format($montoTotal,'2','.',''); ?></td>
                    <td></td>
                </tr>
            </table>
                <?php  ?>
        </form>
    </section>
    <footer>
        <h6 id="centrado">Todos los derechos reservados</h6>
    </footer>
    <?php 
        function getAlumno(){ return $_POST['txtAlumno']; }
        function getPromedio(){ return $_POST['txtPromedio']; }
    ?>
</body>
</html>