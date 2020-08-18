<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$matakuliah = $_POST['matakuliah'];
$sks = $_POST['sks'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into matakuliah values('','$matakuliah','$sks')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>