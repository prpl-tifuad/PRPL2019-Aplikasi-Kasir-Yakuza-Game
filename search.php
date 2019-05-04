
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Searching</title>
	<link href="loginform.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
	</head>

<body>
	<nav class="navbar navbar-inverse"">
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
<div class="jumbotron" style="margin: 0px;background: #8abce6;padding-top: 0px;">
  <hr style="border: 1px solid #fff">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Proses Pencarian</h1>
</form>         
    <div class="table-responsive">
    	<center>
	<table id="mytable" class="table table-bordred table-striped" >
		 <thead>
		<tr >
			<th >Nomor PC</th>
			<th >Nama Produk</th>
			<th >ID Pelanggan</th>
			<th >ID Karyawan</th>
			<th > Date</th>
			<th >Waktu Bermain</th>
			<th >Harga</th>
			</tr>
	
		</thead>
	<?php 
include "koneksi.php";
$key = $_POST['cari'];
echo "Keyword pencarian = $key";
$query = mysqli_query($koneksi,"SELECT prosesbayar.nomor_pc as nomor_pc, prosesbayar.nama_produk as nama_produk, prosesbayar.id_pelanggan as id_pelanggan, prosesbayar.id_karyawan as id_karyawan,prosesbayar.tanggal as tanggal, prosesbayar.waktu_pemakain as waktu_pemakain, prosesbayar.harga as harga FROM prosesbayar WHERE prosesbayar.nomor_pc LIKE '%$key%'");
while ($row = mysqli_fetch_array($query)) {
		?>
	<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['nama_produk'];?></td>
			<td ><?php echo $row['id_pelanggan'];?></td>
			<td ><?php echo $row['id_karyawan'];?></td>
			<td ><?php echo $row['tanggal'];?></td>
			<td ><?php echo $row['waktu_pemakain']." Jam";?></td>
			<td ><?php echo "Rp."." ". $row['harga'];?></td>
			</tr>
			 </tbody>
				<?php

	}
	?>
	</table>
	<a href="datatransaksi.php"><button class="btn btn-success">Kembali</button></a>
	</div>
</center>
</h1>
</body>
</html>