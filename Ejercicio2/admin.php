<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Admin</title>
</head>

<body>

	<div id="contenedor"> <!-- Inicio del contenedor -->
		<?php
			require('cabecera.php');
			require('sidebarIzq.php');
		?>
		<main>
        <?php
            if (isset($_SESSION['esAdmin'])) { //Admin
                echo "<h1>Consola de administración</h1>";
                echo "<p>Aquí va la consola.</p>";
            }
            else { //NO Admin
                echo "<h1>No eres admin. ¡Fuera de aqui!</h1>";
            }
        ?>
		</main>

		<?php
			require('sidebarDer.php');
			require('pie.php');
		?>
	</div> <!-- Fin del contenedor -->
</body>
</html>