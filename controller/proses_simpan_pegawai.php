<?php
include '../config/koneksi.php';

// cek tombol
if(isset($_POST['simpan'])){
    // ambil data formulir
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $golongan = $_POST['golongan'];
    $kode_bagian = $_POST['kode_bagian'];
    
    // buat query
    $sql = "INSERT INTO pegawai (id_pegawai, nama_pegawai, alamat, no_telp, golongan, kode_bagian) 
            VALUES ('$id_pegawai', '$nama_pegawai', '$alamat', '$no_telp', '$golongan', '$kode_bagian')";
    $query = mysqli_query($koneksi, $sql);

    // cek query
    if($query){
        header('Location: ../view/data_pegawai.php?status=sukses');
    } else {
        header('Location: ../view/data_pegawai.php?status=gagal');
    }

}
?>
