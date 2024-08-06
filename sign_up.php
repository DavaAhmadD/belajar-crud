<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD GAJI</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="navbarAtas">
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form method="post" action="controller/buat_akun_baru.php">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <img src="assets/img/animasiLogin.gif" alt="animasi Login" class="w-100">
                        </div>
                        <div class="col">
                            <h1 class="text-center textHome fw-bold">SIGN UP</h1>
                            <div class="group">
                                <h3 class="mb-3 textHome ">Username</h3>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="user" placeholder="Masukan Username yang Anda Inginkan">
                                </div>
                            </div>
                            <div class="group">
                                <h3 class="mb-3 textHome ">Password</h3>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" name="pass" placeholder="Masukan Password yang Anda Inginkan">
                                </div>
                            </div>
                            <div class="group">
                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn tombolLogin text-light" style="width: 100%;" value="Sign Up">
                                        <p>Sudah memiliki akun?<a href="index.php"> Klik disini</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>