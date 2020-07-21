<?php

    session_start();
    require 'database.php';
    
    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $user = null;
    
        if (count($results) > 0) {
            $user = $results;
        }
    }
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $message = '';
    
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header("Location: /pfinal");
        } else {
            $message = 'Sorry, those credentials do not match';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon/png" href="https://images.vexels.com/media/users/3/131263/isolated/preview/af6816ec67ec51da6b275a4aa08d236c-icono-de-c--rculo-de-bloqueo-by-vexels.png">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php if(!empty($user)): ?>
        <br> Welcome. <?= $user['email']; ?>
        <br>You are Successfully Logged In
        <a href="page/index-pag.php">
            Continuar
        </a>
    <?php else: ?>
        <?php if(!empty($message)): ?>
            <p> <?= $message ?></p>
        <?php endif; ?>

        <div class='container card d-flex mt-5'>
            <h1>please login</h1>
            <form action="index.php" method="post">
                <input name="email" type="text" placeholder="Enter your email">
                <input name="password" type="password" placeholder="Enter your Password">
                <input type="submit" value="Submit">
            </form>
            <spam>Don't have an account? <a href="signup.php">Signup</a></spam>
        </div>
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="assets/app.js"></script>
</body>
</html>