<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <!-- <nav id="navegacion">Inicio info</nav>
    <a href="../logout.php">salir</a> -->
    <div id="contenedor-centrado">
        <div>
            <a href="./index-pag.php">
                <img src="assets/Snake.png" alt="Logotipo de Snake" id="redim"/>
            </a>
        </div>
        
        <nav id="menu1">
            <a href="index-pag.php">jugar</a>
            <a href="sinopsis.php">Como jugar</a>
            <a href="../logout.php">salir</a>
        </nav>
    </div>

    <h1>¡¡Snake!!</h1>
    <div id="container">
        <div id="dashboard">
            <b>Score</b>: <span id="score">0</span>
        </div>
        <canvas id="game"></canvas>
    </div>
    <script src="snake.js"></script>
    <script>
        window.onload = () => {
            let snake = new SnakeGame();
            snake.start();
        };
    </script>

    <a href="index-pag.php" id="boton">jugar</a>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/app.js"></script>
</body>
</html>