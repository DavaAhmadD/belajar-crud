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
                                <a class="nav-link" aria-current="page" href="data_bagian.php">Data Bagian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="data_user.php">Data User</a>
                            </li>
                            <li class="nav">
                                <a class="btn text-light tombolLogout m-1" href="../controller/proses_logout.php">LOGOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <h4 class="ms-3 fw-bold">Data User</h4>
        <table class="container text-center justify-content-center mt-2 table" border="3">
            <thead>
                <tr>
                    <th style="background-color: #2b2a4c;" class="text-light">Username</th>
                    <th style="background-color: #2b2a4c;" class="text-light">Password</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "select * from user";
                $query = mysqli_query($koneksi, $sql);

                while($data = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$data['user']."</td>";
                    echo "<td>".$data['pass']."</td>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>  
        </table>
        <p class="ms-3">Total : <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>