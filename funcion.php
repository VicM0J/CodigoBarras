<?php
function login($username, $password) {
    // Ejemplo de usuarios (en producción usa una base de datos y contraseñas hasheadas)
    $users = [
        'admin' => '1234',
        'user' => 'abcd'
    ];

    if (isset($users[$username]) && $users[$username] === $password) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username'] = $username;
        return true;
    } else {
        // Credenciales incorrectas
        return false;
    }
}
?>