<?php
include 'header.php';
include 'config.php';

$Level = $_GET['level'];
$Bahasa = $_GET['bahasa'];
$kuis = mysqli_query($mysqli, "SELECT * from kuis where Level='$Level' and Bahasa='$Bahasa'");

$quiz = mysqli_fetch_assoc($kuis);
// var_dump($quiz);
// die;
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Input Kuis</h1>
    </div>


    <!-- /.container-fluid -->

    <div class="row">
        <div class="col-md-12">
            <form action="submit_kuis.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Soal</label>
                    <input name="id_kuis" type="hidden" value="<?= $quiz['id_kuis']; ?>">
                    <input name="soal" type="text" class="form-control" id="exampleInputEmail1" value="<?= $quiz['Soal']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="jawaban1">Jawaban</label>
                    <input name="jawaban" type="text" class="form-control" id="jawaban1" required>
                </div>
                <!-- <div class="form-group">
                    <label for="jawaban2">Jawaban 2</label>
                    <input type="jawaban2" class="form-control" id="jawaban2">
                </div>
                <div class="form-group">
                    <label for="jawaban3">Jawaban 3</label>
                    <input type="jawaban3" class="form-control" id="jawaban3">
                </div>
                <div class="form-group">
                    <label for="jawaban4">Jawaban 4</label>
                    <input type="jawaban4" class="form-control" id="jawaban4">
                </div> -->
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
<!-- End of Main Content -->

<?php
include 'footer.php';
?>