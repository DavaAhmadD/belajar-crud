<?php
// panggil koneksi database
include "../config/koneksi.php"; 

if (isset($_POST['ubah'])){
    if(isset($_POST['id_pegawai'])) {
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];
        $golongan = $_POST['golongan'];
        $kode_bagian = $_POST['kode_bagian'];
    
        // perintah query untuk mengubah data pada tabel is_siswa
        $query = mysqli_query($koneksi, "UPDATE pegawai SET nama_pegawai='$nama_pegawai', alamat='$alamat', no_telp='$no_telp', golongan='$golongan', kode_bagian='$kode_bagian' WHERE id_pegawai='$id_pegawai'");
        
        // cek query
        if($query){
            header('Location: ../view/data_pegawai.php?status=sukses-edit');
        } else {
            header('Location: ../view/data_pegawai.php?status=gagal-edit');
        }
    }
}
?>