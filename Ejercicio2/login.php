<?php
    session_start();
?>
<form  action="procesarLogin.php" method="post">
        <label for="username">Usarname:</label>
        <input type="text" id="username" name="username" required>
        <p></p>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Enviar">
</form>
