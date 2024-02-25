<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contenido</title>
</head>

<body> 
	<div id="contenedor"> <!-- Inicio del contenedor -->
		<?php
			require('cabecera.php');
			require('sidebarIzq.php');
		?>
		<main>
        <?php
            if (!isset($_SESSION["login"])) { //Usuario incorrecto
                echo "<h1>¡No estás registrado!</h1>";
                echo "<p>Inicia sesión con el botón de arriba a la derecha (Login).</p>";
            }
            else if (isset($_SESSION['esAdmin'])){ //Usuario registrado
                echo "<h1>Bienvenido {$_SESSION['nombre']}</h1>";
                echo "<p>Albion Online es un mmorpg no lineal, en el que escribes tu propia historia sin limitarte a seguir un camino prefijado. 
                Explora un amplio mundo abierto con 5 biomas únicos, todo cuánto hagas tendrá su repercusión en el mundo, con la economía orientada 
                al jugador de Albion, los jugadores crean prácticamente todo el equipo a partir de los recursos que consiguen, el equipo que llevas 
                define quién eres, cambia de arma y armadura para pasar de caballero a mago, o juega como una mezcla de ambas clases. 
                Aventúrate en el mundo abierto frente a los habitantes y las criaturas de Albion, inicia expediciones o adéntrate en mazmorras 
                en las que encontrarás enemigos aún más difíciles, enfréntate a otros jugadores en encuentros en el mundo abierto, lucha por los 
                territorios o por ciudades enteras en batallas tácticas, relájate en tu isla privada, donde podrás construir un hogar, cultivar 
                cosechas y criar animales, únete a un gremio, todo es mejor cuando se trabaja en grupo. Adéntrate ya en el mundo de Albion y 
                escribe tu propia historia.</p>
                <img src = 'ALBION_ONLINE.jpg'  alt = 'Albion'>";
            }
            else{
                echo "<h1>Bienvenido {$_SESSION['nombre']}</h1>";
                echo "<p>Oye, ¿sabías que en términos de reproduccion de Pokémon humanos masculinos y femeninos, Vaporeon es el Pokémon más compatible para humanos.
                No solo están en el grupo de huevos de campo, que está compuesto principalmente por mamíferos, los Vaporeon miden un promedio de 3 pies con 03 pulgadas
                de altura y pesan 63.9 libras. Esto significa que son lo suficientemente grandes como para poder soportar el pene humano, y con sus impresionantes estadísticas 
                base para HP y acceso a Armadura Acida, incluso puedes ser rudo con uno.
                Debido a su biología principalmente basada en agua, no tengo ninguna duda de que un Vaporeon excitado estaría increíblemente mojado, 
                tan mojado que fácilmente podrías tener sexo con uno. durante horas sin secarse.
                También pueden aprender los movimientos Atraer, Ojos de muñeca, Cautivar, Encanto y Látigo de cola, además de no tener pelaje para ocultar los pezones, 
                por lo que sería increíblemente fácil para uno ponerte cachondo.
                Con sus habilidades Water Absorb e Hydration, pueden recuperarse fácilmente de la fatiga con suficiente agua. Ningún otro Pokémon se acerca a este nivel 
                de compatibilidad. Además, un dato curioso, si te vienes lo suficiente, puedes hacer que tu Vaporeon se vuelva blanco. literalmente construido para la 
                polla humana. Increibles estadisticas de armadura + Un alto HP y Armadura Acida significa que puede aguantar pene todo el día, de todas las formas y 
                tamaños, y aún así venir por más.
                </p>
                <img src = 'Vaporeon.png'  alt = 'Vaporeon'>";
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