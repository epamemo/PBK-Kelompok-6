<?php
include 'header.php';
?>

<div class="container-fluid col-lg-10" align="center">

    <div class="row container m-4 py-5">
        <!-- Earnings (Monthly) Card Example -->
        <div class="mr-5" align="center">
            <div class="card border-bottom-primary shadow p-3">
                <div class="card-body">
                    <img class="rounded-circle" src="assets/img/default-user-icon.jpg" alt="Profile" width="200px">
                    <div class="h3 mt-3 font-weight-bold text-gray-800"><?php
                                                                        echo $_SESSION['Nama'];
                                                                        ?></div>
                </div>
            </div>
        </div>

        <div class="col-lg mx-auto my-auto text-left">
            <div class="card border-bottom-primary shadow p-3">
                <div class="card-body">
                    <h1 class="h3 font-weight-bold text-primary">Profil</h1>
                    <br>
                    <table class="table">
                        <tr>
                            <td>
                                <h5 class="font-weight-bold mt-2">Biodata</h5>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php
                                echo $_SESSION['Nama'];
                                ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php
                                echo $_SESSION['E_mail'];
                                ?></td>
                        </tr>
                    </table>
                    <hr>
                    <br>
                    <div class="text-right">
                        <a href="#" class="btn btn-primary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example >
                    <div class="card border-bottom-primary">
                        <div class="col-lg p-5 text-left shadow h-100 py-2">
                            <div class="card-body">

                            </div>
                        </div>
                    </div -->

</div>
<!-- /.container-fluid -->

</div>

<?php
include 'footer.php';
?>