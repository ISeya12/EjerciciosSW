<?php
session_start(); // Iniciar la sesión

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verificar las credenciales (esto es solo un ejemplo, deberías realizar una verificación segura)
    if ($username === 'U' && $password === 'c') {
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = 'Usuario';
        echo "¡Bienvenido, Usuario! Utiliza el menú de la izquierda para navegar.";
    } elseif ($username === 'A' && $password === 'c') {
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = 'Administrador';
        $_SESSION['esAdmin'] = true;
        echo "¡Bienvenido, Administrador! Utiliza el menú de la izquierda para navegar.";
    } else {
        echo "Error: Nombre de usuario o contraseña incorrectos.";
    }
}
?>
