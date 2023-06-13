<?php

session_start();

if( isset($_SESSION["login"])){
    header("Location: php/profile.php");
    exit;
}

require 'function.php';

if ( isset($_POST["register"])){

    if( registrasi($_POST) > 0){
        echo    "<script>
                    alert('user baru berhasil ditambahkan');
                </script>";
    } else{
        echo mysqli_error($conn);
    }
}
if ( isset($_POST["login"])){

    $loginUsername = $_POST["login-username"];
    $loginPassword = $_POST["login-password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$loginUsername'");

    // cek username
    if(mysqli_num_rows($result) === 1 ){
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($loginPassword, $row["password"])){
            // set session
            $_SESSION["login"] = true; 
            // login sukses
            header("Location: profile.php");
            exit;
        }
    }

    $error = true;
}



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

            <?php if( isset($error)) : ?>
                <p style="color:red; font-style:italic;"> Username / Password salah</p> 
            <?php endif; ?>

            <div class="login-item">
                <ion-icon name="person-outline"></ion-icon>
                <input id="login-username" name="login-username" type="text" placeholder="Username">
            </div>
            <div class="login-item">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="login-password" name="login-password" type="password" placeholder="Password">
            </div>
            <div class="button">
                <button type="submit" name="login" class="btn" value="login">Login</button>
            </div>

            <p>Don't have an account?<a href="#" class="signup-link"> Sign Up</a></p>
        </form>
        <form action="" method="post" class="signup-box">
            <h1>Sign Up</h1>
            <div class="signup-item">
                <ion-icon name="person-outline"></ion-icon>
                <input id="sign-up-username" name="sign-up-username" type="text" placeholder="Username" required>
            </div>
            <div class="signup-item">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="sign-up-password" name="sign-up-password" type="password" placeholder="Password" required>
            </div>
            <div class="signup-item">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input id="sign-up-password2" name="sign-up-password2" type="password" placeholder="Confirm password" required>
            </div>
            <div class="button">
                <button class="btn" name="register" type="submit" value="sign-up">Sign Up</button>
            </div>
            <!-- <p>Have an account?<a href="#" class="login-link">Login</a></p> -->
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