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

	$id= $_GET['id'];

	$query = mysqli_query($koneksi,"SELECT * FROM produk_pc where nama_produk= '$id' ");
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
		  <b>Data sedang digunakan, tidak bisa mengubah nama</b>
		</div><?php 
		    }
		    ?>
<div class="form">
		<form method="POST" action="./proses/prosesupdateproduk.php" >
			<table border="0" align="center">
				<tr>
					<td><input type="text" hidden="hidden"  name="id" value="<?php echo $id ?>"></td>
				</tr>
				<tr>

					<td style="color: white;">Nama Produk PC</td>
					<td style="color: white;">:</td>
						<td>
						<input type="text" class="form-control" name="nama_produk" value="<?= $row['nama_produk'] ?>">
					</td>
				</tr>
				<tr>

					<td style="color: white;">Jenis Produk PC</td>
					<td style="color: white;">:</td>
						<td>
						<input type="text" class="form-control" name="jenis_produk" value="<?= $row['jenis_produk'] ?>">
					</td>
				</tr>
					<tr>
				<td></td><center>
				<td colspan="2"><br><button type="submit" class="btn btn-danger" value="simpan">Simpan Perubahan</button>
					<a class="btn btn-danger" href="produkpc.php">Kembali</a></td>
</center>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>