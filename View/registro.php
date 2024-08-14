<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Styles/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login">
        <h1>Registro</h1>
        <form action="../Controllers/registro.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username"
            placeholder="Nombre" id="username" required>
            <!-- El label en est ecaso se utiliza para poder darle un incono aparte del placeholder -->
            <label for="password"> 
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="userlastname"
            placeholder="Apellido" id="userlastname" required>
            <label for="password"> 
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="user"
            placeholder="Usuario" id="user">
            <label for="password"> 
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña" id="password">

            <input type="submit" value="Registrar">
        </form>
        <a href="../View/inicio.php">Volver</a>
        <a href="../View/Login.php">Iniciar sesión</a>
    </div>
</body>
</html>