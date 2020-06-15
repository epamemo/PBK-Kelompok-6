<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard-siJanda</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Custom CSS -->
    <link rel=" stylesheet" href="../css/style-dashboard.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.css">

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#" class="navbar-brand">
                    <img class="logo-extended" src="../image/logo-w@4x.png" alt="Logo">
                </a>
            </div>

            <ul class="list-unstyled components with-icon">
                <h3>
                    <center>Welcome</center>
                </h3>
                <li class="active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i>
                        <span class="with-icon">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="profil.php">Profil</a>
                </li>
                <li>
                    <a href="materi.php">Materi</a>
                </li>
                <li>
                    <a href="#">Latihan</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-menu">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="../index.php">Landing Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>