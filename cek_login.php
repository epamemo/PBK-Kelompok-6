<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$E_mail = $_POST['E_mail'];
$Pwd = $_POST['Pwd'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where E_mail='$E_mail' and Pwd='$Pwd'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['E_mail'] = $E_mail;
	$_SESSION['status'] = "login";
	header("location:dashboard/index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>