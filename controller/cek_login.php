<?php
session_start();

include'../config/koneksi.php';

$awikwok = $_POST["user"];
$pass = $_POST["pass"]; 

$data = mysqli_query($koneksi, "select * from user where user='$awikwok' and pass='$pass'");
$cek = mysqli_num_rows($data);

if ($cek > 0){
    $_SESSION['user'] = $awikwok;
    header("location: ../home.php");
}else{
    header("location: ../?pesan=gagal");
}
?>