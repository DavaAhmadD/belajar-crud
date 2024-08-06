<?php
include'../config/koneksi.php';
// kalau tidak ada query string
if(!isset($_GET['id'])){
    header('Location:../view/data_pegawai.php');
}
// ambil id dari query string
$id_pegawai = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD GAJI</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbarAtas">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-light">Ubah Data Pegawai</a>
        </div>
    </nav>

    <div class="container mt-4">
        <form action="../controller/proses_ubah_pegawai.php" method="POST">
            <fieldset>
                <input type="hidden" name="id_pegawai" value="<?php echo $data['id_pegawai']; ?>">
                <div class="form-group">
                    <label for="nama_pegawai">Nama:</label>
                    <input type="text" class="form-control" name="nama_pegawai" value="<?php echo $data['nama_pegawai']; ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                <textarea class="form-control" name="alamat"><?php echo $data['alamat']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="no_telp">No.Telepon:</label>
                    <input type="text" class="form-control" name="no_telp" value="<?php echo $data['no_telp']; ?>">
                </div>
                <div class="form-group">
                    <label for="golongan">Golongan:</label>
                    <input type="text" class="form-control" name="golongan" value="<?php echo $data['golongan']; ?>">
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian:</label>
                    <select class="form-control" name="kode_bagian">
                        <?php
                        //query menampilkan nama barang ke dalam combobox
                        $query = mysqli_query($koneksi, "SELECT * FROM bagian");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <option value="<?php echo $data['kode_bagian']; ?>"><?php echo $data['nama_bagian']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <p>
                    <input class="btn tombolEdit text-light mt-3" type="submit" value="Ubah" name="ubah" />
                    <a class="btn tombolLogout text-light mt-3" href="data_pegawai.php">Batal</a>
                </p>
        </fieldset>
    </form>
</div>
</body>
</html>