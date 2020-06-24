<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form pendaftaran

$jawaban = $_POST["jawaban"];
$id = $_POST["id_kuis"];
//untuk password digunakan enskripsi md5

$kuis = mysqli_query($mysqli, "SELECT * from kuis where id_kuis ='$id' ");

$quiz = mysqli_fetch_assoc($kuis);

if ($jawaban == $quiz['Jawaban']) {
    $hasil = true;
} else {
    $hasil = false;
}
// var_dump(mysqli_error($hasil));
// die;

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    header("location:b_jawa.php?pesan=berhasil");
} else {
    header("location:b_jawa.php?pesan=gagal");
}
