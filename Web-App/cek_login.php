<?php

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$E_mail = $_POST['E_mail'];
$Pwd = $_POST['Pwd'];

// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($mysqli, "SELECT * from user where E_mail='$E_mail' and Pwd='$Pwd'");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$active_user = mysqli_fetch_assoc($login);
if ($cek > 0) {
	session_start();
	$nama = $active_user['Nama'];
	$_SESSION['E_mail'] = $E_mail;
	$_SESSION['Nama'] = $nama;
	$_SESSION['status'] = "login";
	//header("location:dashboard/user/index.php");
} else {
	header("location:login.php?pesan=gagal");
}
