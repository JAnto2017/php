<?php
$nombre= '';
echo 'Hola'.(($nombre=='')?'desconocido':$nombre).'<br>';
echo 'Hola'.($nombre?:'desconocido').'<br>';//version 5.3
$nombre = 'josee';
echo 'Hola '.(($nombre=='')?'desconocido':$nombre).'<br>';
echo 'Hola '.($nombre?:'desconocido').'<br>';
?>
