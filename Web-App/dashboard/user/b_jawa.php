<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'berhasil') {
            # code...
            echo '<div class="alert alert-success" role="alert">
            Jawaban Benar
          </div>';
        } else {
            # code...
            echo '<div class="alert alert-danger" role="alert">
            Jawaban salah
          </div>';
        }
    }
    ?>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Belajar Bahasa Jawa</h1>
        <a href="index.php" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl mb-4">
            <div class="card border-bottom-primary shadow" style="height: 230px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-primary card-title h4">Level 1</div>
                            <div class="card-text h6 mb-4">Pengenalan mengenai alphabet dalam Bahasa Jawa</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#level1">Mulai</a>
                </div>
            </div>
        </div>
        <div class="col-xl mb-4">
            <div class="card border-bottom-primary shadow" style="height: 230px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-primary card-title h4">Level 2</div>
                            <div class="card-text h6 mb-4">Pengenalan kosakata yang digunakan sehari-hari</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#level2">Mulai</a>
                </div>
            </div>
        </div>
        <div class="col-xl mb-4">
            <div class="card border-bottom-primary shadow">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-primary card-title h4">Level 3</div>
                            <div class="card-text h6 mb-4">Penyusunan kosakata dalam membuat kalimat pernyataan</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#level3">Mulai</a>
                </div>
            </div>
        </div>
        <div class="col-xl mb-4">
            <div class="card border-bottom-primary shadow" style="height: 230px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-primary card-title h4">Level 4</div>
                            <div class="card-text h6 mb-4">Penyusunan kosakata dalam membuat kalimat pertanyaan.</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#level4">Mulai</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Level 1 Modal-->
    <div class="modal fade" id="level1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelajari materi atau kerjakan quiz?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih materi untuk mulai belajar. Jika sudah paham dapat melanjutkan mengerjakan quiz.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="materi1_j.php">Materi</a>
                    <a class="btn btn-info" href="quiz.php?level=1&bahasa=jawa">Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Level 2 Modal-->
    <div class="modal fade" id="level2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pelajari materi atau kerjakan quiz?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih materi untuk mulai belajar. Jika sudah paham dapat melanjutkan mengerjakan quiz.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="materi2_j.php">Materi</a>
                    <a class="btn btn-info" href="quiz2_j.php">Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Level 3 Modal-->
    <div class="modal fade" id="level3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Level 3</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih materi untuk mulai belajar. Jika sudah paham dapat melanjutkan mengerjakan quiz.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="materi3_j.php">Materi</a>
                    <a class="btn btn-info" href="quiz3_j.php">Quiz</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Level 4 Modal-->
    <div class="modal fade" id="level4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Level 4</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan pilih materi untuk mulai belajar. Jika sudah paham dapat melanjutkan mengerjakan quiz.</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="materi4_j.php">Materi</a>
                    <a class="btn btn-info" href="quiz4_j.php">Quiz</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?php
include 'footer.php';
?>