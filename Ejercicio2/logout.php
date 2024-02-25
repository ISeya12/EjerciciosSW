<?php
    session_start();

    unset($_SESSION['nombre']);
    unset($_SESSION['login']);
    unset($_SESSION['esAdmin']);

    session_destroy();

    echo '<h1>Gracias por visitar nuestra web. Hasta pronto</h1>';
?>