<?php
$server='localhost';
$user='root';
$pass='';
$db='belajar_crudrpl1';

$koneksi = mysqli_connect($server, $user, $pass, $db);

if( !$koneksi){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}

?>
