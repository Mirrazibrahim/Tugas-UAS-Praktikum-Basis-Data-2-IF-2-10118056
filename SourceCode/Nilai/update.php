<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_nilai'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
 
// update data ke database
mysqli_query($koneksi,"update nilai set absen='$absen', tugas='$tugas', uts='$uts',uas='$uas' where id_nilai='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>