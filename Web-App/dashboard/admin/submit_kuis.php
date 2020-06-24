<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form pendaftaran
$soal = $_POST["soal"];
$jawaban = $_POST["jawaban"];
$Level = $_POST["level"];
$bahasa = $_POST["bahasa"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
$sql = "insert into kuis (Soal,Jawaban, Level, Bahasa) values
		('$soal','$jawaban','$Level','$bahasa')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($mysqli, $sql);
// var_dump(mysqli_error($hasil));
// die;

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    header("location:input_kuis.php?pesan=berhasil");
} else {
    header("location:input_kuis.php?pesan=gagal");
}
