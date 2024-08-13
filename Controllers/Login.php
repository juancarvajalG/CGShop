<?php
session_start();

include '../DataBase/config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username_login = $_POST['username'];
    $password_login = $_POST['password'];

    //Preparamos y ejecutamos la consulta SQL
    $stmt = $conn->prepare("SELECT id FROM users where user = ? AND password = ?");
    $stmt->bind_param("ss",$username_login,$password_login);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows > 0){
        $_SESSION['user']=$username_login;
        header("Location:../View/inicioAdmin.php");
        exit();
    }else{
        echo "Usuario o contraseña incorrecto";
    }
    $stmt->close();
    $conn->close();
}