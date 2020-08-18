<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_dosen'];
$nip = $_POST['nip'];
$nama_dosen = $_POST['nama_dosen'];
$email = $_POST['email'];
$matakuliah = $_POST['matakuliah'];
 
// update data ke database
mysqli_query($koneksi,"update dosen set nip='$nip', nama_dosen='$nama_dosen', email='$email',id_mk='$matakuliah' where id_dosen='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>