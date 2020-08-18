<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_mk'];
$matakuliah = $_POST['matakuliah'];
$sks = $_POST['sks'];
 
// update data ke database
mysqli_query($koneksi,"update matakuliah set matakuliah='$matakuliah', sks='$sks' where id_mk='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>