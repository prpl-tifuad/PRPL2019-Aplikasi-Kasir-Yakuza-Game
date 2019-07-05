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

	$nomor_pc= $_GET['id'];

	$query = mysqli_query($koneksi,"SELECT * FROM prosesbayar where nomor_pc='$nomor_pc' ");
	while ($row = mysqli_fetch_array($query)) {
		# code...
		?>
		<CENTER>
  <h1 style="color: white;">Ubah Data</h1><span style="color: white;"> Create <i class='fa fa-paint-brush' style="color: white;"></i> By <i class='fa fa-code'></i> <a href='https://www.instagram.com/gilangasisramadann/' style="color: white;"> Gilang Asis Ramadan </a></span></CENTER><hr>
</div>
<div class="form">
		<form method="POST" action="update1.php" >
			<table border="0" align="center">
				<tr>
					<td><input type="text" hidden="hidden" name="id" value="<?php echo $nomor_pc ?>"></td>
				</tr>
				<tr>

					<td style="color: white;">Nomor PC</td>
					<td style="color: white;">:</td>
						<td>
						<?php 
						$result = mysqli_query($koneksi, "SELECT * FROM kategori_pc order by nomor_pc asc");
						 ?>
						<select class="form-control" name="nomor_pc">
						<?php while ($data = mysqli_fetch_assoc($result)) {
							if ($row['nomor_pc'] == $data['nomor_pc']) {?>
								<option value="<?= $data['nomor_pc']?>" selected="selected"> <?= $data['nomor_pc']?></option>
							<?php
								}
								else{ ?>
								<option value="<?= $data['nomor_pc']?>"> <?= $data['nomor_pc']?></option>
						<?php } 
						}?>
					</td>
				</tr>
				<tr>
					<td style="color: white;">Nama Produk</td>
					<td style="color: white;">:</td>
						<td>
							<?php 
						$result = mysqli_query($koneksi, "SELECT * FROM produk_pc");
						 ?>
						<select class="form-control" name="nama_produk">
						<?php while ($data = mysqli_fetch_assoc($result)) {
							if ($row['nama_produk'] == $data['nama_produk']) {?>
								<option value="<?= $data['nama_produk']?>" selected="selected"> <?= $data['nama_produk']?></option>
							<?php
								}
								else{ ?>
								<option value="<?= $data['nama_produk']?>"> <?= $data['nama_produk']?></option>
						<?php } 
						}?>
				</select>
					</td>
				</tr>
				<tr>
					<td style="color: white;">Nama Pelanggan</td>
					<td style="color: white;">:</td>
					<td>
					<?php 
						$result = mysqli_query($koneksi, "SELECT * FROM pelanggan");
						 ?>
						<select class="form-control" name="id_pelanggan">
						<?php while ($data = mysqli_fetch_assoc($result)) {
							if ($row['id_pelanggan'] == $data['id_pelanggan']) {?>
								<option value="<?= $data['id_pelanggan']?>" selected="selected"> <?= $data['nama']?></option>
							<?php
								}
								else{ ?>
								<option value="<?= $data['id_pelanggan']?>"> <?= $data['nama']?></option>
						<?php } 
						}?>
					</select>
					</td>
				</tr>
				<tr>
					<td style="color: white;">Nama Karyawan</td>
					<td style="color: white;">:</td>
						<td><?php 
						$result = mysqli_query($koneksi, "SELECT * FROM karyawan");
						 ?>
						<select class="form-control" name="id_karyawan">
						<?php while ($data = mysqli_fetch_assoc($result)) {
							if ($row['id_karyawan'] == $data['id_karyawan']) {?>
								<option value="<?= $data['id_karyawan']?>" selected="selected"> <?= $data['nama_kar']?></option>
							<?php
								}
								else{ ?>
								<option value="<?= $data['id_karyawan']?>"> <?= $data['nama_kar']?></option>
						<?php } 
						}?>
				</select>
					</td>
				</tr>
				<tr>
				<tr>
					<td style="color: white;">Date</td>
					<td style="color: white;"> : </td>
					<td><input type="date" class="form-control" name="tanggal" value="<?php 
					echo $row['tanggal']?>"></td>
				</tr>
			</tr>
				<tr>
					<td style="color: white;">Waktu Bermain</td>
					<td style="color: white;">:</td>
						<td><input type="text" class="form-control" name="waktu_pemakain" value="<?php echo $row['waktu_pemakain']?>">
					</td>
				</tr>
				<tr>

					<tr>
				<td></td><center>
				<td colspan="2"><br><button type="submit" class="btn btn-danger" value="simpan">Simpan Perubahan</button>
					<a class="btn btn-danger" href="datatransaksi.php">Kembali</a></td>
</center>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>