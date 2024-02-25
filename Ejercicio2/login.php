<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Login</title>
</head>

<body>

    <div id="contenedor"> <!-- Inicio del contenedor -->
        <?php
            require('cabecera.php');
            require('sidebarIzq.php');
        ?>
        <main> 
            <form  action="procesarLogin.php" method="post">
                <label for="username">Usarname:</label>
                <input type="text" id="username" name="username" required>
                <p></p>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <input type="submit" value="Enviar">
            </form>
        </main>

        <?php
            require('sidebarDer.php');
            require('pie.php');
        ?>
    </div> <!-- Fin del contenedor -->
</body>
</html>