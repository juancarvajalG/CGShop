<?php
include '../DataBase/config.php'; // Asegúrate de que config.php tenga la configuración correcta de la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario y limpiarlos
    $username_register = trim($_POST['username']);
    $lastname_register = trim($_POST['userlastname']);
    $user_register = trim($_POST['user']);
    $password_register = trim($_POST['password']);

    // Validar datos
    if (empty($username_register) || empty($lastname_register) || empty($user_register) || empty($password_register)) {
        die('Todos los campos son obligatorios.');
    }

    // Hash de la contraseña
    $password_hash = password_hash($password_register, PASSWORD_BCRYPT);

    // Preparar la consulta SQL
    $stmt = $conn->prepare('INSERT INTO users (name, lastName, user, password, id_cargo) VALUES (?, ?, ?, ?, 3)');
    // Cada vez que se utiliza el conn y se asignan los valores con "?" es porque los datos se van a proteger para evitar la
    // inyección a su vez, los datos se establecen despues con un "bind_param"

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param('ssss', $username_register, $lastname_register, $user_register, $password_hash);

    if ($stmt->execute()) {
        // Redirigir a la página de inicio
        header("Location: ../View/Login.php");
        exit();
    } else {
        // Manejar errores de la base de datos
        echo 'Error al registrar el usuario: ' . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    // Método no permitido
    http_response_code(405);
    echo 'Método no permitido.';
}
?>
