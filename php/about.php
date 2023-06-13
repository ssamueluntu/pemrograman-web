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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="logo">
        <h1><a href="../index.php">CITA</a></h1>
    </div>
    <div class="container-about">
        <h1>About</h1>
        <div class="content">
            <span>Website Cita adalah sebuah situs web yang dibentuk untuk membuat daftar tugas atau aktivitas
                yang
                harus dilakukan. Website ini juga dirancang untuk membantu pengguna agar lebih terorganisir
                dalam
                mengelola waktu dan menyelesaikan tugas-tugas yang perlu dilakukan.</span>
        </div>
    </div>
    <div class="container-team">
        <h1>TEAM</h1>
        <ul class="content-team">
            <li class="list-team">
                <img src="../img/kuroko.jpg" alt="">
                <ul class="name-team">
                    <li>Desriyanti Dea</li>
                    <li>210211060051</li>
                    <li>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </li>
                </ul>
            </li>
            <li class="list-team">
                <img src="../img/kuroko.jpg" alt="">
                <ul class="name-team">
                    <li>Intan Endeka</li>
                    <li>210211060174</li>
                    <li>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </li>
                </ul>
            </li>
            <li class="list-team">
                <img src="../img/kuroko.jpg" alt="">
                <ul class="name-team">
                    <li>Leibniz Tumipa</li>
                    <li>210211060027</li>
                    <li>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </li>
                </ul>
            </li>
            <li class="list-team">
                <img src="../img/kuroko.jpg" alt="">
                <ul class="name-team">
                    <li>Samuel Untu</li>
                    <li>210211060215</li>
                    <li>
                        <ion-icon name="logo-instagram"></ion-icon>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>