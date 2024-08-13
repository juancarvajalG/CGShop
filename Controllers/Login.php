<?php
session_start();

include '../DataBase/config.php';

// Obtener datos del formulario
$username_db = $_POST['username'];
$password = $_POST['password'];

// Preparar y ejecutar la consulta para buscar al usuario
$sql = "SELECT * FROM usuarios WHERE username = ?"; // Cambia "usuarios" por el nombre de tu tabla
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Usuario encontrado, verificar la contraseña
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) { // Asumiendo que las contraseñas están hasheadas
        // Autenticación exitosa
        $_SESSION['username'] = $username;
        header("Location: ../View/inicio.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo "Usuario o contraseña incorrectos.";
    }
} else {
    // Usuario no encontrado
    echo "Usuario o contraseña incorrectos.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();