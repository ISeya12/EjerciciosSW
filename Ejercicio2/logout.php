<?php
    session_start();

	if(isset($_SESSION['nombre'])) 	unset($_SESSION['nombre']);
    if(isset($_SESSION['login']))	unset($_SESSION['login']);
    if(isset($_SESSION['esAdmin']))	unset($_SESSION['esAdmin']);

    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Logout</title>
</head>

<body>

	<div id="contenedor"> <!-- Inicio del contenedor -->
		<?php
			require('cabecera.php');
			require('sidebarIzq.php');
		?>
		<main>
            <h1>Gracias por visitar nuestra web. Hasta pronto</h1>
		</main>

		<?php
			require('sidebarDer.php');
			require('pie.php');
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>