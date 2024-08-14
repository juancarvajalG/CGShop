<?php
session_start();

// Destruir la sesión
session_unset(); // Libera todas las variables de sesión
session_destroy(); // Destruye la sesión

// Redirigir al usuario a la página de login
header("Location: ../View/inicio.php");
exit();