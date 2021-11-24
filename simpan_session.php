<?php
include ("koneksi.php");
$user = $_POST['nama'];
$umur = $_POST['umur'];
    session_start(); 
    $_SESSION['nama'] = $user;
    $_SESSION['umur'] = $umur;
    header('location:info.php');

?>