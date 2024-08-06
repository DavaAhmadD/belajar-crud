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
            <a class="navbar-brand fw-bold text-light">Tambah Data Bagian</a>
        </div>
    </nav>

    <div class="container mt-4">
        <form action="../controller/proses_simpan_bagian.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="kode_bagian">Kode Bagian: </label>
                    <input class="form-control" type="text" name="kode_bagian"/>
                </div>
                <div class="form-group">
                    <label for="nama_bagian">Nama Bagian: </label>
                    <input class="form-control" type="text" name="nama_bagian"/>
                </div>
                <p>
                    <input class="btn tombolEdit text-light mt-3" type="submit" value="Simpan" name="simpan"/>
                    <a class="btn tombolLogout text-light mt-3" href="data_bagian.php">Batal</a>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
