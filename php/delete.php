<?php

require 'function.php';

$id = $_GET["id"];

if(delete($id) > 0){
    echo    "<script>
                alert('Gambar dihapus')";
            "</script>";
            header("Location: image.php");
} else {
    echo    "<script>
                alert('Gambar gagal dihapus')";
            "</script>";
            header("Location: image.php");
}

?>