<?php
$numeros = array('cero','uno','dos','cero' => 0,'uno' => 1, 'dos' => 2);
echo '<b>Primera sintaxis:</b><br>';
foreach($numeros as $numero) {
	echo "$numero<br>";
}

echo '<b>segunda sintaxis:</b><br>';
foreach($numeros as $clave => $numero) {
	echo "$clave => $numero<br>";
}
?>
