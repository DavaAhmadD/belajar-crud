<?php
include '../config/koneksi.php';
if(isset($_GET['id'])){
    
    // ambil id dari query string
    $kode_bagian = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM bagian WHERE kode_bagian='$kode_bagian'";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if($query){
        header('location: ../view/data_bagian.php?status=sukses-hapus');
    } else {
        header('location: ../view/data_bagian.php?status=gagal-hapus');
        die("gagal menghapus...");
    }
}else {
    die("akses dilarang...");
}
?>