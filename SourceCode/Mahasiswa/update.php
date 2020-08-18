<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_mhs'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', alamat='$alamat' where id_mhs='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>