<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Como Jugar?</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>

<div id="contenedor-centrado">
        <div>
            <a href="index-pag.php">
                <img src="assets/Snake.png" alt="Logotipo de Snake" id="redim"/>
            </a>
        </div>
        <nav id="menu1">
        <a href="index-pag.php">jugar</a>
        <a href="sinopsis.php">Como jugar</a>
        <a href="../logout.php">salir</a>
    </nav>
    </div>
    
    <h1>¿Como Jugar a Snake?</h1>

    <section id="informacion">
        <p> - Para jugar a Snake, lo unico que necesitas es tu teclado.</p>
        <img src="assets/teclado.png" alt="img teclado" id="imagen">
        <p> - Utiliza las flechas de tu teclado (arriba, abajo, derecha e izquierda) para mover a Snake por dentro del espacio establecido </p>
        <img src="assets/teclas.png" alt="img teclas" id="imagen">
        <p> - Si dejas que Snake toque el borde del espacio Automaticamente perderas "Game over"</p>
        <img src="assets/gameover.png" alt="img game over" id="imagen">
        <p> - Sumaras puntos a medida que Snake coma manzanas, entre mas manzanas Snake crecerá y aumentará tu puntaje</p>
        <img src="assets/score.png" alt="img score" id="imagen2">
    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../assets/app.js"></script>
</body>
</html>