<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
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
  <h1>Ubah Data</h1><span> Create <i class='fa fa-paint-brush'></i> By <i class='fa fa-code'></i> by <a href='https://www.instagram.com/gilangasisramadann/'> Gilang Asis Ramadan</a></span></CENTER><hr>
</div>
<div class="form">
		<form method="POST" action="update1.php" >
			<table border="0" align="center">
				<tr>
					<td><input type="text" hidden="hidden" name="id" value="<?php echo $nomor_pc ?>"></td>
				</tr>
				<tr>

					<td>Nomor PC</td>
					<td>:</td>
						<td><input type="text" class="form-control"  name="nomor_pc" value="<?php echo $row['nomor_pc']?>">
					</td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td>:</td>
						<td><select class="form-control" name="nama_produk" value="<?php echo$row['nama_produk']?>">
					<option value="LG">LG</option>
					<option value="Polytron">Polytron</option>
					<option value="Samsung">Samsung</option>
				</select>
					</td>
				</tr>
				<tr>
					<td>ID Pelanggan</td>
					<td>:</td>
					<td> <select class="form-control" name="id_pelanggan" value="<?php echo$row['id_pelanggan']?>">
					<option value="101">Gilang Asis Ramadan</option>
					<option value="102">Binta Wahyu</option>
					<option value="103">Dimas Aji</option>
					<option value="104">Abi Fajar</option>
					<option value="105">Lalu Arfi</option>
					<option value="106">Dian Ramadhani</option>
					<option value="107">Tyo Idzhar</option></select>
					</td>
				</tr>
				<tr>
					<td>ID Karyawan</td>
					<td>:</td>
						<td><select class="form-control" name="id_karyawan" value="<?php echo$row['id_karyawan']?> ">
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option>
					<option value="006">006</option>
					<option value="007">007</option>
				</select>
					</td>
				</tr>
				<tr>
				<tr>
					<td>Date</td>
					<td> : </td>
					<td><input type="date" class="form-control" name="tanggal" value="<?php 
					echo $row['tanggal']?>"></td>
				</tr>
			</tr>
				<tr>
					<td>Waktu Bermain</td>
					<td>:</td>
						<td><input type="text" class="form-control" name="waktu_pemakain" value="<?php echo $row['waktu_pemakain']?>">
					</td>
				</tr>
				<tr>

					<tr>
				<td></td><center>
				<td colspan="2"><br><button type="submit" class="btn btn-primary" value="simpan">Simpan Perubahan</button><br><br>
					<a class="btn btn-success" href="datatransaksi.php">Kembali</a></td>
</center>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>