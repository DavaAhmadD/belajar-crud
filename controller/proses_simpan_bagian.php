<?php
include '../config/koneksi.php';

// cek tombol
if(isset($_POST['simpan'])){
    // ambil data formulir
    $kode_bagian = $_POST['kode_bagian'];
    $nama_bagian = $_POST['nama_bagian'];
    
    // buat query
    $sql = "INSERT INTO bagian (kode_bagian, nama_bagian) 
            VALUES ('$kode_bagian', '$nama_bagian')";
    $query = mysqli_query($koneksi, $sql);

    // cek query
    if($query){
        header('Location: ../view/data_bagian.php?status=sukses');
    } else {
        header('Location: ../view/data_bagian.php?status=gagal');
    }

}
?>
