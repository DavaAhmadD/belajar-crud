<?php
// panggil koneksi database
include "../config/koneksi.php"; 

if (isset($_POST['ubah'])){
    if(isset($_POST['kode_bagian'])) {
        $kode_bagian = $_POST['kode_bagian'];
        $nama_bagian = $_POST['nama_bagian'];
    
        // perintah query untuk mengubah data pada tabel bagian
        $query = mysqli_query($koneksi, "UPDATE bagian SET nama_bagian='$nama_bagian' WHERE kode_bagian='$kode_bagian'");
        
        // cek query
        if($query){
            header('Location: ../view/data_bagian.php?status=sukses-edit');
        } else {
            header('Location: ../view/data_bagian.php?status=gagal-edit');
        }
    }
}
?>
