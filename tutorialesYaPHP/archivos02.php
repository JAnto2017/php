<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIVOS</title>
    <style>
        h1{
            color:blue;
        }
        p{
            color:orange;
        }
    </style>
</head>
<body>
    <h1>Archivos</h1><hr>
    <p>
        Se utiliza el control <b>textare</b>, las propiedades <b>rows</b> y <b>cols</b> que dimensionan el mismo en la pantalla.
    </p>
    <hr>
    <p>
        Creamos o abrimos el archivo de texto <i>datos.txt</i>. El segundo parámetro de la función <b>fopen</b> indica la forma de apertura de archivo <b>a</b> - lo crea o si ya existe el archivo lo abre para añadir datos al final -, <b>w</b> crea el archivo de texto, si existe borra su contenido y la última forma de apertura del archivo es <b>r</b> abre el archivo para su lectura.
    </p>
    <hr>
    <?php
        $ar = fopen("/home/pi/Documents/Proyectos_PHP/tutorialesYaPHP/datos.txt","a") or die("Problemas en la creacion");
        fputs($ar, $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['comentarios']);
        fputs($ar, "\n");
        fputs($ar, "-------------------------------");
        fputs($ar, "\n");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";
    ?>
    <hr>
    
</body>
</html>