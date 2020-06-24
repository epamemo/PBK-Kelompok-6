<?php
session_start();
$_SESSION['E_mail'] = '';
unset($_SESSION['E_mail']);
session_unset();
session_destroy();
header("location:login.php?pesan=logout");
