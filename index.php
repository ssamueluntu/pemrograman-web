<?php 

session_start();

if( isset($_SESSION["login"])){
    header("Location: php/profile.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITA</title>
    
    <link rel="icon" href="../img/logo-cita.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/get_started.css">
</head>

<body> 
    <div class="logo">
        <h1><a href="../index.php">CITA</a></h1>
    </div>
    <div class="container-start">
        <div id="content-start" class="content-start">
            <div class="content">
                <h1>To do list application</h1>
                <h3>Cita makes it easy to plan tasks by creating to-do lists</h3>
                <h1>Plan your work, work your plan!</h1>
                <div class="button">
                    <button id="btn-about"><a href="php/about.php">About</a></button>
                    <button id="btn-started"><a href="php/register.php">Get Started</a></button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/get_started.js"></script>
</body>

</html>