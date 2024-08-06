<?php
include '../config/koneksi.php';
if(isset($_GET['id'])){
    
    // ambil id dari query string
    $id_pegawai = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if($query){
        header('location: ../view/data_pegawai.php?status=sukses-hapus');
    } else {
        header('location: ../view/data_pegawai.php?status=gagal-hapus');
        die("gagal menghapus...");
    }
}else {
    die("akses dilarang...");
}
?>