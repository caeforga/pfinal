<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
        $message = 'Successfully created new user';
        } else {
        $message = 'Sorry there must have been an issue creating your account';
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="icon/png" href="https://images.vexels.com/media/users/3/131263/isolated/preview/af6816ec67ec51da6b275a4aa08d236c-icono-de-c--rculo-de-bloqueo-by-vexels.png">
    <title>Signup</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
    <?php endif; ?>
    <div class='container card d-flex mt-5'>
        <h1>SignUp</h1>
        <form action="signup.php" method="post">
            <input name="email" type="text" placeholder="Enter your email">
            <input name="password" type="password" placeholder="Enter your Password">
            <input type="submit" value="Submit">
        </form>
        <spam>You have an account? <a href="index.php">Login</a></spam>
    </div>
</body>
</html>