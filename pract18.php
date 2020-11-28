<?php
/*
 * aleatorio
 */
$nombre = rand(0,1)?'josee':NULL;
$edad   = rand(0,1)?rand(7,77):NULL;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>PAG-PHP</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.29" />
</head>
<body>
	<div>
		<?php if ($nombre == NULL):?>
			Hola desconocido<br>
		<?php elseif ($edad == NULL):?>
			Conozco tu <span>nombre</span>
			pero no tu <span>edad</span>.<br>
		<?php else:?>
			Conozco tu <span>nombre</span>
			y tu <span>edad</span>,
			pero no se lo diré a nadie.<br>
		<?php endif;?>
	</div>
</body>

</html>
