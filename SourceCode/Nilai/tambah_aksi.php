<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$matakuliah = $_POST['matakuliah'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$nilai=(0.1*$absen)+(0.2*$tugas)+(0.3*$uts)+(0.4*$uas);
//indeks
if ($nilai>=85)
$j=("A") and $i=("LULUS");
else
if ($nilai>=80)
$j=("A-") and $i=("LULUS");
else
if ($nilai>=75)
$j=("B+") and $i=("LULUS");
else
if ($nilai>=70)
$j=("B") and $i=("LULUS");
else
if ($nilai>=65)
$j=("B-") and $i=("LULUS");
else
if ($nilai>=60)
$j=("C") and $i=("LULUS");
else
if ($nilai>=55)
$j=("D") and $i=("TIDAK LULUS");
else
if ($nilai>100)
$j=("") and $i=("NILAI SALAH");
else
$j=("E") and $i=("TIDAK LULUS");
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into nilai values('','$nama','$matakuliah','$absen','$tugas','$uts','$uas','$nilai','$j','$i')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>