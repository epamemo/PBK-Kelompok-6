<?php
//Include file koneksi ke database
include "config.php";

//menerima nilai dari kiriman form pendaftaran
$Nama=$_POST["Nama"];
$E_mail=$_POST["E_mail"];
$Level=2;
$Pwd=$_POST["Pwd"];
$password=md5($_POST["Pwd"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into anggota (Nama,E_mail, Level, Pwd) values
		('$Nama','$E_mail','$Level','$Pwd')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($mysqli,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>