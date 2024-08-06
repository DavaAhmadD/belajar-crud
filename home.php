<?php
session_start(); // Mulai sesi

// Periksa apakah pengguna sudah login atau belum
if(isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else {
    // Jika pengguna belum login, arahkan kembali ke halaman login
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD GAJI</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="view/data_pegawai.php">Data Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="view/data_bagian.php">Data Bagian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="view/data_user.php">Data User</a>
                        </li>
                        <li class="nav">
                            <a class="btn text-light tombolLogout m-1" href="controller/proses_logout.php">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="home" class="container mt-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 d-flex align-items-center md-0 order-lg-first">
                <img src="assets/img/orangData.gif" width="700px" alt="animasi_data" class="gambar m">

            </div>
            <div class="col-md-6 p-5 test brand-text d-flex flex-column align-items-center justify-content-center col-sm-12">
                <div class="row">
                    <h1 class="fw-bold textHome p-0 text-e" style="font-size: 70px;">CRUD GAJI</h1>
                    <h4 class="textHome">Welcome, <?php echo $_SESSION['user']; ?></h4>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="container mt-5">
            <p class="text-muted pull-left">&copy;XI RPL 1 | SMKN 4 Tangerang</p>
        </div>
    </footer>
</body>   
</html> 