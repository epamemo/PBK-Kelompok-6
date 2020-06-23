<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Selamat Datang!</div>
                            <div class="h1 mb-0 font-weight-bold text-gray-800">Hai Sultan, Ayo lanjutkan belajarnya!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl mb-4">
            <a href="level.php" class="btn btn-blue shadow h-100 py-2" style="font-size:4vw;">
                <div class="card-body">
                    <div class="align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold">Belajar Bahasa Jawa</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl mb-4">
            <a href="level.php" class="btn btn-success shadow h-100 py-2" style="font-size:4vw;">
                <div class="card-body">
                    <div class="align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold">Belajar Bahasa Sunda</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>

</div>
<!-- End of Main Content -->

<?php
include 'footer.php';
?>