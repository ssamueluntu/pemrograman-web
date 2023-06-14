<?php 


// koneksi ke database
// $conn = mysqli_connect("sql111.infinityfree.com", "if0_34417804", "7dils5CITA1", "if0_34417804_cita");
$conn = mysqli_connect("localhost", "root", "", "project_uas_test");


// Fungsi gambar
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function add($data){
    global $conn;

    $nama = htmlspecialchars( $data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]) ;

    $query = "INSERT INTO gambar VALUES ('', '$nama', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM gambar WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function registrasi($data){
    global $conn;

    $signUpUsername = strtolower(stripslashes($data["sign-up-username"]));
    $signUpPassword = mysqli_real_escape_string($conn, $data["sign-up-password"]);
    $signUpPassword2 = mysqli_real_escape_string($conn, $data["sign-up-password2"]);

    // cek usernama sudah ada ato belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$signUpUsername'");

    if( mysqli_fetch_assoc($result)) {
        echo    "<script>
                    alert('username sudah terdaftar!')";
                "</script>";
        return false;
    }

    // cek konfirmasi password

    if ( $signUpPassword !== $signUpPassword2){
        echo    "<script>
                    alert('konfirmasi password tidak sesuai!:');
                </script>";
        return false;
    }
    // enskripsi password
    $signUpPassword = password_hash($signUpPassword, PASSWORD_DEFAULT);

    //  tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$signUpUsername', '$signUpPassword')");

    return mysqli_affected_rows($conn);
}

?>