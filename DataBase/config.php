<?php
// datos de conexión
$servername = "localhost";  // Cambia esto si tu servidor de base de datos no está en localhost
$username_db = "root";      // Cambia esto según tu configuración
$password_db = "";          // Cambia esto según tu configuración
$dbname = "tu_base_de_datos"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Puedes usar la conexión para realizar consultas aquí

// Cerrar la conexión cuando ya no se necesite
// $conn->close(); // No olvides cerrar la conexión cuando termines
?>
