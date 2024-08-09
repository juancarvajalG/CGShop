<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGShop inicio</title>
    <link rel="stylesheet" href="../Styles/inicio.css">
</head>

<header>
    <div>
        <?php include '../Modules/navBar.php'; ?>
    </div>
</header>

<body>

    <div class="Body">
        <div class="HeadLine">
            <div class="MainSign">
                <h1>CG Shop</h1>
                <h3>transformamos tus deseos en una realidad</h3>
            </div>
        </div>
        <div class="NoneLine"></div>
        <div class="BlackLine"></div>
        <!-- Productos -->
        <div class="Products">
            <div>
                <?php include '../Modules/Carrousel.php';?>
            </div>
            <div class="TShirt">
                <h2>Camisas</h2>
            </div>
        </div>
    </div>

    <footer>

    </footer>
</body>

<script src="../js/script.js"></script>
</html>