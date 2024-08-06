
<!DOCTYPE html>
<htm>
<head>
    <title>CRUD GAJI</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbarAtas">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-light">Tambah Data Pegawai</a>
        </div>
    </nav>

    <div class="container mt-4">

        <form action="../controller/proses_simpan_pegawai.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="id_pegawai">ID Pegawai: </label>
                    <input class="form-control" type="text" name="id_pegawai"/>
                </div>
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai: </label>
                    <input class="form-control" type="text" name="nama_pegawai"/>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat: </label>
                    <textarea class="form-control" name="alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat">No Telepon: </label>
                    <input class="form-control" name="no_telp"></input>
                </div>
                <div class="form-group">
                    <label for="golongan">Golongan: </label>
                    <input class="form-control" type="text" name="golongan"/>
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian: </label>
                    <select class="form-control" name="kode_bagian" style="width: 160px;">
                        <?php
                        include '../config/koneksi.php';
                        //query menampilkan nama bagian ke dalam combobox
                        $query = mysqli_query($koneksi, "SELECT * FROM bagian");
                        while($data = mysqli_fetch_array($query)){
                            ?>
                            <option value = "<?=$data['kode_bagian'];?>"><?php echo $data['nama_bagian'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <p>
                    <input class="btn tombolEdit text-light mt-3" type="submit" value="Simpan" name="simpan"/>
                    <a class="btn tombolLogout text-light mt-3" href="data_pegawai.php">Batal</a>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
