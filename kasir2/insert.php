<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
		<CENTER>
  <h1 style="padding: 20px 0px 0px 0px"><p style="color: white;">Masukkan Data Transaksi</h1><span style="color: white;"> Create <i class='fa fa-paint-brush'></i> By <i class='fa fa-code'></i><a href='https://www.instagram.com/gilangasisramadann/' style="color: white;"> Gilang Asis Ramadan</p></a></span></CENTER><hr>
</div>
<div class="form">
	<form method="post" action="insertsave.php">
		<table align="center">
			<tr class="form-group">
				<td style="color: white;">Nomor PC</td>
				<td> : </td>
				<td>
					<?php 
					include 'koneksi.php';
					$result = mysqli_query($koneksi, "SELECT * FROM kategori_pc order by nomor_pc asc");
					 ?>
					<select class="form-control" name="nomor_pc">
					<?php while ($data = mysqli_fetch_assoc($result)) {?>
						<option value="<?= $data['nomor_pc']?>"> <?= $data['nomor_pc']?></option>
					<?php } ?>

				</td>
			</tr>
			<tr>
				<td style="color: white;">Nama Produk</td>
				<td> : </td>
				<td>
					<?php
					$result = mysqli_query($koneksi, "SELECT * FROM produk_pc");
					 ?>
					<select class="form-control" name="nama_produk">
					<?php while ($data = mysqli_fetch_assoc($result)) {?>
						<option value="<?= $data['nama_produk']?>"><?= $data['nama_produk']?></option>
					<?php } ?>
				</select>
				</td>
			
			<tr>
				<tr>
				<td style="color: white;">Nama Pelanggan</td>
				<td> : </td>
				<td>
					<?php 
					$result = mysqli_query($koneksi, "SELECT * FROM pelanggan");
					 ?>
					<select class="form-control" name="id_pelanggan">
					<?php while ($data = mysqli_fetch_assoc($result)) {?>
						<option value="<?= $data['id_pelanggan']?>"><?= $data['nama']?></option>
					<?php } ?>
				</select>
				</td>
			
			<tr>
					<tr>
				<td style="color: white;">Nama Karyawan</td>
				<td> : </td>
				
				<td> <?php 
					$result = mysqli_query($koneksi, "SELECT * FROM karyawan");
					 ?>
					<select class="form-control" name="id_karyawan">
					<?php while ($data = mysqli_fetch_assoc($result)) {?>
						<option value="<?= $data['id_karyawan']?>"><?= $data['nama_kar']?></option>
					<?php } ?>
				</select>
				</td>
			<tr>
				<tr>
					<td style="color: white;">Date</td>
					<td> : </td>
					<td><input type="date" class="form-control" name="tanggal"></td>
				</tr>
			</tr>
			
			<tr>
					<tr>
				<td style="color: white;">Waktu Bermain</td>
				<td> : </td>
				<td> <input type ="text" class="form-control" name="waktu_bermain"></td>
			
			<tr>
				<!-- 	<tr>
				<td>Harga</td>
				<td> : </td>
				<td> <input type ="text" class="form-control" name="harga"></td>
			
			</tr> -->
			<td></td>
			<td></td>
			<br>
				
			</tr>
			
		</table><br><center>
		<button class="btn btn-danger">Tambah</button>
		<button  class="btn btn-danger" type="reset">Reset</button>
		</center>
		<br>
		</form>
	</div>
	<center>
	<a href="datatransaksi.php"><button class="btn btn-danger">Kembali</button></a>
	</center>
	<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>-->

	</form>
</body>
</html>