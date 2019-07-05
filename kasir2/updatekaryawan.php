<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include 'koneksi.php';

	$id_karyawan= $_GET['id'];

	$query = mysqli_query($koneksi,"SELECT * FROM karyawan where id_karyawan='$id_karyawan' ");
	while ($row = mysqli_fetch_array($query)) {
		# code...
		?>
		<CENTER>
  <h1 style="color: white;">Ubah Data</h1><span style="color: white;"> Create <i class='fa fa-paint-brush'></i> By <i class='fa fa-code'></i> by <a href='https://www.instagram.com/gilangasisramadann/'style="color: white;"> Gilang Asis Ramadan</a></span></CENTER><hr>
</div>

    <?php 
    if(isset($_GET['pesan'])){
    	?>
    	<div class="alert alert-danger" role="alert">
		  <b>Gagal Di Simpan</b>
		</div><?php 
		    }
		    ?>
<div class="form">
		<form method="POST" action="./proses/prosesupdatekaryawan.php" >
			<table border="0" align="center">
				<tr>
					<td><input type="text" hidden="hidden"  name="id" value="<?php echo $id_karyawan ?>"></td>
				</tr>
				<tr>

					<td style="color: white;">ID Karyawan</td>
					<td style="color: white;">:</td>
						<td>
						<input type="number" class="form-control" name="id_karyawan" value="<?= $id_karyawan ?>">
					</td>
				</tr>
				<tr>

					<td style="color: white;">Nama Karyawan</td>
					<td style="color: white;">:</td>
						<td>
						<input type="text" class="form-control" name="nama_kar" value="<?= $row['nama_kar'] ?>">
					</td>
				</tr>
				<tr>

					<td style="color: white;">Jadwal Shift</td>
					<td style="color: white;">:</td>
						<td>
						<input type="time" class="form-control" name="jadwal_shift" value="<?= $row['jadwal_shift'] ?>">
					</td>
				</tr>
				<tr>
					<td style="color: white;">Nomor Handphone</td>
					<td style="color: white;">:</td>
						<td>
						<input type="number" class="form-control" name="nomor_hp" value="<?= $row ['nomor_hp'] ?>">
					</td>
				</tr>
					<tr>
				<td></td><center>
				<td colspan="2"><br><button type="submit" class="btn btn-danger" value="simpan">Simpan Perubahan</button>
					<a class="btn btn-danger" href="Karyawan.php">Kembali</a></td>
</center>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>