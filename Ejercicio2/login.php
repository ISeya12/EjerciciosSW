<?php
    session_start();
?>
<form  action="procesarLogin.php" method="post">
        <label for="username">Usarname:</label>
        <input type="text" id="nombre" name="nombre" required>
        <p></p>

        <label for="password">Password:</label>
        <input type="text" id="nombre" name="nombre" required>
        <input type="submit" value="Enviar">
</form>
