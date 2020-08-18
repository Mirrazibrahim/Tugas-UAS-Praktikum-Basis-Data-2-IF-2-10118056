<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Teknik Informatika</title>
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
					<li class="nav-item">
						<a class="nav-link" href="../dosen/index.php">Dosen</a>
					<li class="nav-item ">
						<a class="nav-link" href="../matakuliah/index.php">Matakuliah</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Nilai</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top:20px">
 
	<h2>DATA NILAI</h2>
	<br/>
	<a class="btn btn-info" href="index.php" role="button" >KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA NILAI</h3>
	<form method="post" action="tambah_aksi.php">
    <table class="table table-striped table-hover table-sm table-bordered">
			<tbody>
			<tr>			
            <td>Nama mahasiswa</td>
                <td>
                    <select name="nama">
                    <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"select * from mahasiswa");
                        echo "<option value=0 selected>- Pilih Mahasiswa -</option>";
                        while($d = mysqli_fetch_assoc($data)){
                    ?>                        
                            <option value="<?php echo $d['id_mhs']; ?>"><?php echo$d['nama'] ?></option>'';
                        <?php
                        }
                    ?>    
                    </select>
                </td>
			</tr>
			<tr>
            <td>Nama Matakuliah</td>
                <td>
                    <select name="matakuliah">
                    <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi,"select * from matakuliah");
                        echo "<option value=0 selected>- Pilih Matakuliah -</option>";
                        while($d = mysqli_fetch_assoc($data)){
                    ?>
                            <option value="<?php echo $d['id_mk']; ?>"><?php echo$d['matakuliah'] ?></option>'';
                        <?php
                        }
                    ?>    
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai Absens</td>
				<td><input type="number" name="absen"></td>
                </td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
				<td><input type="number" name="tugas"></td>
                </td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
				<td><input type="number" name="uts"></td>
                </td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
				<td><input type="number" name="uas"></td>
                </td>
            </tr>
			<tr>
				<td></td>
				<td><input class="btn btn-info" type="submit" value="SIMPAN"></td>
			</tr>		
            </tbody>
    </table><?php
    if (isset($_POST['simpan'])) {
    echo "<br>Data yang dipilih:<br>";
    echo $_POST['matakuliah'];
    }
    ?>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	</form>
</body>
</html>