<?php

require 'function.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITA | Login</title>
    
    <link rel="icon" href="../img/logo-cita.png">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="logo">
        <h1><a href="../index.php">CITA</a></h1>
    </div>
    <div class="container-login">
        <form action="" method="post" class="login-box">
            <h1>Login</h1>
            <div class="login-item">
                <ion-icon name="person-outline"></ion-icon>
                <input id="login-username" type="text" placeholder="Username"required>
            </div>
            <div class="login-item">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="login-password" type="password" placeholder="Password" required>
            </div>
            <div class="button">
                <button type="submit" name="register" class="btn" value="login">Login</button>
            </div>

            <p>Don't have an account?<a href="#" class="signup-link"> Sign Up</a></p>
        </form>
        <div class="bottom-left">
            <img src="../img/img-login.png">
            <h3>Plan your work, work your plan!</h3>
        </div>

    </div>
    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>