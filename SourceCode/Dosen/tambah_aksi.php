<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nip = $_POST['nip'];
$nama_dosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$matakuliah = $_POST['matakuliah'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into dosen values('','$nip','$nama_dosen','$email','$matakuliah')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>