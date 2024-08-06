<?php
    // Include file koneksi database
    include("../config/koneksi.php");

    // Inisialisasi variabel error
    $error = '';

    // Proses registrasi ketika form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $user = mysqli_real_escape_string($koneksi, $_POST['user']);
        $pass = mysqli_real_escape_string($koneksi, $_POST['pass']);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data ke dalam tabel
        $query = "INSERT INTO user (user, pass) VALUES ('$user', '$pass')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("location: ../index.php");
        } else {
            $error = "Registrasi gagal. Silakan coba lagi.";
        }
    }
?>