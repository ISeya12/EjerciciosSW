<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($username === 'user' && $password === 'userpass') {
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = 'Usuario';
        echo "¡Bienvenido, $username! Utiliza el menú de la izquierda para navegar.";
    } elseif ($username === 'admin' && $password === 'adminpass') {
        $_SESSION['login'] = true;
        $_SESSION['nombre'] = 'Administrador';
        $_SESSION['esAdmin'] = true;
        echo "¡Bienvenido, $username! Utiliza el menú de la izquierda para navegar.";
    } else {
        echo "Error: Nombre de usuario o contraseña incorrectos.";
    }
}
?>
