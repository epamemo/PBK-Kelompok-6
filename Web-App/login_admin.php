<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>siJanda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang Admin</h1>
                                    </div>
                                    <form class="user" action="sign_admin.php" method="Post">
                                        <div class="form-group">
                                            <input type="text" name="E_mail" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="Password" name="Pwd" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat aku sayang</label>
                                            </div>
                                        </div>
                                        <button type="Submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                                        <a class="text-center text-danger">
                                            <?php
                                            if (isset($_GET['pesan'])) {
                                                if ($_GET['pesan'] == "gagal") {
                                                    echo "Login gagal! Email dan password salah!";
                                                } else if ($_GET['pesan'] == "logout") {
                                                    echo "Anda telah berhasil logout";
                                                } else if ($_GET['pesan'] == "belum_login") {
                                                    echo "Anda harus login untuk mengakses halaman admin";
                                                }
                                            }
                                            ?>
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center small">
                                        Belum punya akun? <a href="daftar_admin.php">Daftar</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Beranda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>