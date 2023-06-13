<?php 

// session_start();

require 'function.php';

$image = query("SELECT * FROM gambar");

if( isset($_POST["submit"])){

    $nama = $_POST["nama"];
    $gambar = $_POST["gambar"];

    $query = "INSERT INTO gambar VALUES ('', '$nama', '$gambar')";

    mysqli_query($conn, $query);

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gambar</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/image.css">
</head>
<body>
    <!-- Menu Image -->
    <div id="container-image" class="container-image">
        <div class="wrapper-image">
            <div id="add-form" class="container-form-image">
                <button id="back">
                    <ion-icon class="icon" name="arrow-back-outline"></ion-icon>
                    <span>Back</span>
                </button>
                <form action="" method="post">
                    <ul>
                        <li>
                            <h1>Tambah gambar</h1>
                        </li>
                        <li>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama">
                        </li>
                        <li>
                            <label for="gambar">Gambar</label>
                            <input type="text" name="gambar" id="gambar">
                        </li>
                        <li>
                            <button class="btn" type="submit" name="submit">Tambah Gambar</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div id="content-image" class="content-image">
                <h1>Gambar</h1>
                <ul>
                    <?php foreach( $image as $img ) : ?>
                    <li class="list-image">
                        <ion-icon class="icon-delete" name="close-outline"></ion-icon>
                        <img src="../img/<?= $img['gambar']; ?>" alt="<?= $img["nama"]; ?>">
                        <span class="name-img"><?= $img['nama']; ?></span>
                    </li>
                    <?php endforeach; ?>
                    <li class="list-image">
                        <button id="add-image">
                            <ion-icon class="icon icon-add" name="add-outline"></ion-icon>
                            <span>add image</span>
                        </button>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
            <!-- Akhir Menu Image -->

                <!-- Icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>