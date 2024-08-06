<?php
include '../config/koneksi.php';
// kalau tidak ada query string
if(!isset($_GET['id'])){
    header('Location:../view/data_bagian.php');
}
// ambil id dari query string
$kode_bagian = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM bagian WHERE kode_bagian='$kode_bagian'";
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
            <a class="navbar-brand fw-bold text-light">Ubah Data Bagian</a>
        </div>
    </nav>
    
    <div class="container mt-4">
        <form action="../controller/proses_ubah_bagian.php" method="POST">
            <fieldset>
                <input type="hidden" name="kode_bagian" value="<?php echo $data['kode_bagian']; ?>">
                <p>
                    <label for="nama_bagian">Nama Bagian: </label>
                    <textarea cols="160" rows="1" name="nama_bagian"><?php echo $data['nama_bagian']; ?></textarea>
                </p>
                <p>
                    <input class="btn tombolEdit text-light mt-2" type="submit" value="Ubah" name="ubah" />
                    <a class="btn tombolLogout text-light mt-2" href="data_bagian.php">Batal</a>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
