
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Searching</title>
	<link href="loginform.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
	</head>

<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	
      <a class="navbar-brand" href="#">YakuzaGame.co.id</a>
      </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="barangproduk.php">Kategori PC</a></li>
        <li><a href="karyawan.php">Karyawan</a></li> 
        <li><a href="produkpc.php">Produk PC</a></li>
        <li><a href="DataPelanggan.php">Data Pelanggan</a></li>
        <li><a href="DataTransaksi.php">Data Pembayaran</a></li> 
      </ul>
  </div>
</div>
</nav>
<div class="container">
<div class="jumbotron" style="margin: 0px;background-color: rgba(245, 245, 245, 0.4);padding-top: 0px;">
  <hr style="border: 1px solid #fff">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Proses Pencarian</h1>
</form>         
<?php 
include "koneksi.php";
$key = $_POST['cari'];
echo "<center>Keyword pencarian = $key</center> <br>";
$query = mysqli_query($koneksi,"SELECT *,  pelanggan.nama as namapelanggan, karyawan.nama_kar as namakar  FROM prosesbayar 
			join pelanggan on prosesbayar.id_pelanggan = pelanggan.id_pelanggan join karyawan on prosesbayar.id_karyawan = karyawan.id_karyawan WHERE prosesbayar.nomor_pc LIKE '%$key%' or pelanggan.nama LIKE '%$key%' or karyawan.nama_kar LIKE '%$key%' or prosesbayar.tanggal LIKE '%$key%' or prosesbayar.waktu_pemakain LIKE '%$key%' or prosesbayar.harga LIKE '%$key%'");

if (mysqli_num_rows($query) >0) {
 ?>
    <div class="table-responsive">

	<table id="mytable" class="table table-bordred table-striped" >
		 <thead>
		<tr >
			<th style="color: white;">Nomor PC</th>
			<th style="color: white;">Nama Produk</th>
			<th style="color: white;">Nama Pelanggan</th>
			<th style="color: white;">Nama Karyawan</th>
			<th style="color: white;">Date</th>
			<th style="color: white;">Waktu Bermain</th>
			<th style="color: white;">Harga</th>
			</tr>
	
		</thead>
	<?php 

	while($row = mysqli_fetch_array($query)) {
			?>
		<tr > 
				<td class="success"><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
				<td class="info"><?php echo $row['nama_produk'];?></td>
				<td class="danger"><?php echo $row['namapelanggan'];?></td>
				<td class="info"><?php echo $row['namakar'];?></td>
				<td class="warning"><?php echo $row['tanggal'];?></td>
				<td class="danger"><?php echo $row['waktu_pemakain']." Jam";?></td>
				<td class="active"><?php echo "Rp."." ". $row['harga'];?></td>
				</tr>
				 </tbody>
					<?php
	}

	?>
	</table>
	<a href="datatransaksi.php"><button class="btn btn-danger">Kembali</button></a>
	</div>
	<?php 
	}
	else{
		echo '<div class="alert alert-danger" role="alert">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;"><center>Tidak Ada !!!</center></h1>
</div> <a href="datatransaksi.php"><button class="btn btn-danger">Kembali</button></a>';
	} ?>
</center>
</h1>
</body>
</html>