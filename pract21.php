<?php
$x = 'labc';
settype ($x,'integer');
echo '\'labc\' convertido en entero = ',var_dump ($x),'<br>';

$x = 1.7;
settype ($x,'integer');
echo '1.7 convertido en entero = ',var_dump ($x),'<br>';

$x = TRUE;
settype ($x,'string');
echo 'TRUE convertido en cadena = ',var_dump ($x),'<br>';

?>
