<header>
	<h1>Mi gran página web</h1>

	<div class="saludo">
		<?php
		$_SESSION["nombre"] = "Carlos";
			if (isset($_SESSION)){
				echo('Bienvenido ' . $_SESSION["nombre"] . '. Buenos dias');

			}
		?>
	Usuario desconocido. <a href='login.php'>Login</a>
	</div>

</header>