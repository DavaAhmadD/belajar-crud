<?php include '../config/koneksi.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD GAJI</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbarAtas text-light mb-3 navbar-dark">
            <div class="container">
                <a class="navbar-brand fw-bold text-light" href="#">CRUD GAJI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="ms-auto">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="data_pegawai.php">Data Pegawai</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="data_bagian.php">Data Bagian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="data_user.php">Data User</a>
                            </li>
                            <li class="nav">
                                <a class="btn text-light tombolLogout m-1" href="../controller/proses_logout.php">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <h4 class="ms-3 fw-bold">Data Bagian</h4>
        <a class="btn tombolTambah text-light ms-3 mt-2" href="tambah_bagian.php">
            <i class="uil uil-plus-circle"></i> Tambah Data
        </a>
        <div class="container">
            <?php if (isset($_GET['status'])) : ?>
                <p>
                    <?php
                        if ($_GET['status'] == 'sukses') {
                            echo  '<div class="alert alert-success" role="alert"><strong>Sukses!</strong> Data berhasil ditambah.</div>';
                        } else if ($_GET['status'] == 'gagal') {
                            echo '<div class="alert alert-danger" role="alert"><strong>Gagal!</strong> Data gagal ditambah, silahkan coba lagi.</div>';
                        } else if ($_GET['status'] == 'sukses-edit') {
                            echo '<div class="alert alert-success" role="alert"><strong>Sukses!</strong> Data berhasil diubah.</div>';
                        } else if ($_GET['status'] == 'gagal-edit') {
                            echo '<div class="alert alert-danger" role="alert"><strong>Gagal!</strong> Data gagal diubah, silahkan coba lagi.</div>';
                        } else if ($_GET['status'] == 'sukses-hapus') {
                            echo '<div class="alert alert-success" role="alert"><strong>Sukses!</strong> Data berhasil dihapus.</div>';
                        } else if ($_GET['status'] == 'gagal-hapus') {
                            echo '<div class="alert alert-danger" role="alert"><strong>Gagal!</strong> Data gagal dihapus, silahkan coba lagi.</div>';
                        }
                    ?>
                </p>
                <?php endif; ?>
                <table class=" text-center justify-content-center mt-2 table" border="3">
                    <thead>
                        <tr>
                            <th style="background-color: #2b2a4c;" class="text-light">Kode Bagian</th>
                            <th style="background-color: #2b2a4c;" class="text-light">Nama Bagian</th>
                            <th style="background-color: #2b2a4c;" class="text-light">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $sql = "select * from bagian";
                        $query = mysqli_query($koneksi, $sql);

                        while($data = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$data['kode_bagian']."</td>";
                            echo "<td>".$data['nama_bagian']."</td>";
                            echo "<td>";
                            echo "<a class='btn btn-sm tombolEdit' href='ubah_bagian.php?id=".$data['kode_bagian']."'><i class='uil uil-edit'></i></a>";
                            echo "<a class='btn btn-sm tombolHapus' href='../controller/proses_hapus_bagian.php?id=".$data['kode_bagian']."'onclick=\"return confirm('Anda yakin Ingin Menghapus Data ".$data['kode_bagian']." Dengan Nama Bagian ".$data['nama_bagian']."?');\"\'><i class='uil uil-trash-alt'></i></a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>  
                </table>
        </div>
        <p class="ms-3">Total : <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>