<header>
	<h1>Mi gran página web</h1>

	<div class="saludo">
		<?php
			if (isset($_SESSION['nombre'])){
				echo 'Bienvenido ' . $_SESSION["nombre"];
				echo '<a href="logout.php">(Salir)</a>';
			}
			else{
				echo '<p>Usuario desconocido. <a href="login.php">Login</a></p> ';
			}
		?>
	</div>
</header>