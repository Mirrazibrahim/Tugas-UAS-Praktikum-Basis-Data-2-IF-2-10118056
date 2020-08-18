<!DOCTYPE html>
<html>
<head>
	<title>Data Matakuliah Teknik Informatika</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		<a class="navbar-brand" href="../index.php">UAS BASIS DATA 2</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="../mahasiswa/index.php">Mahasiswa</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="../dosen/index.php">Dosen</a>
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Matakuliah</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../Nilai/index.php">Nilai</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:20px">

	<h2>DATA MATAKULIAH</h2>
	<br/>
	<a class="btn btn-info" href="index.php" role="button" >KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MATAKULIAH</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id_mk'];
	$data = mysqli_query($koneksi,"SELECT * FROM matakuliah WHERE id_mk='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
		<table class="table table-striped table-hover table-sm table-bordered">
			<tbody>
				<tr>			
					<td>Nama Matakuliah</td>
					<td>
						<input type="hidden" name="id_mk" value="<?php echo $d['id_mk']; ?>">
						<input type="text" name="matakuliah" value="<?php echo $d['matakuliah']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jumlah Sks</td>
					<td><input type="number" name="sks" value="<?php echo $d['sks']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input class="btn btn-info" type="submit" value="SIMPAN"></td>
				</tr>		
				</tbody>
	</table>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
		</form>
		<?php 
	}
	?>
 
</body>
</html>