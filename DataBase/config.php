<?php
// datos de conexión
$servername = "localhost";
$username_db = "root";  
$password_db = "";
$dbname = "cgshop";

// Crear conexión
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Cerrar la conexión cuando ya no se necesite
// $conn->close();
