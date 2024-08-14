<?php
session_start();
include '../DataBase/config.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario y limpiarlos
    $user_login = trim($_POST['username']);
    $password_login = trim($_POST['password']);

    // Validar datos
    if (empty($user_login) || empty($password_login)) {
        die('Usuario y contraseña son obligatorios.');
    }

    // Preparar la consulta SQL
    $stmt = $conn->prepare('SELECT id, password FROM users WHERE user = ?');

    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Vincular parámetros y ejecutar la consulta
    $stmt->bind_param('s', $user_login);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Obtener el hash de la contraseña
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        // Verificar la contraseña
        if (password_verify($password_login, $password)) {
            // Contraseña correcta
            $_SESSION['user'] = $user_login;
            header("Location: ../View/inicio.php");
            exit();
        } else if($password_login == $password) {
            $_SESSION['user'] = $user_login;
            header("Location: ../View/inicio.php");
            exit();
        }else{
            echo "Usuario hash no encontrado";
        }
    } else {
        // Usuario no encontrado
        echo 'Usuario o contraseña incorrecto no hash.';
    }

    $stmt->close();
    $conn->close();
} else {
    // Método no permitido
    http_response_code(405);
    echo 'Método no permitido.';
}
