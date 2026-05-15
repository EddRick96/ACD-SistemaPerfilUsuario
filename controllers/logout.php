<?php
session_start();

// Eliminar todas las variables de sesión
$_SESSION = [];

// Destruir la sesión
session_destroy();

// Eliminar cookie de sesión en el cliente
setcookie(session_name(), '', time() - 42000);

// Redirigir al usuario a la página de inicio
header('Location: index.html');
exit;
?>