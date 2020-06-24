<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Input Kuis</h1>
        <div class="text-center">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "berhasil") {
                    echo "Kuis berhasil dimasukanr";
                } else if ($_GET['pesan'] == "gagal") {
                    echo "Kuis gagal dimasukan";
                }
            }
            ?>
        </div>
    </div>


    <!-- /.container-fluid -->

    <div class="row">
        <div class="col-md-12">
            <form action="submit_kuis.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Soal</label>
                    <input name="soal" type="text" class="form-control" id="exampleInputEmail1" required>
                </div>
                <div class="form-group">
                    <label for="jawaban1">Jawaban 1</label>
                    <input name="jawaban" type="text" class="form-control" id="jawaban1" required>
                </div>
                <div class="form-group">
                    <label for="level">Level</label>
                    <input name="level" type="text" class="form-control" id="level" required>
                </div>
                <select name="bahasa" class="form-control form-control-lg">
                    <option value="jawa">Jawa</option>
                    <option value="sunda">Sunda</option>
                </select>
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