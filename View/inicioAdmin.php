<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ../View/Login.php");
    exit();
}

echo "¡Bienvenido, " . htmlspecialchars($_SESSION['user']) . "!";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <p><a href="../Controllers/logout.php">Cerrar sesión</a></p>
</body>
</html>