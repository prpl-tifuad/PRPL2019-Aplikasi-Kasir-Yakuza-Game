<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barang Produk</title>
	<link href="loginform.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

</head>
<body>
	<div id="body">
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
</div>
<body>
<div class="container">
	<div class="jumbotron" style="margin: 0px;background: #8abce6;padding-top: 0px;">
  <hr style="border: 0px solid #fff">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Data Produk PC</h1>
	<!--<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>-->
</form>
	<div class="table-responsive">
		<center>
	<table id="mytable" class="table table-bordred table-striped">
		 <thead>
			<th >Nama Produk PC</th>
			<th >Jenis Produk PC</th>
			
				<!--		<th >Tools</th>-->
			</tr>
	
		</thead>
		<?php
		include 'koneksi.php';
		
		$query = mysqli_query($koneksi,"SELECT * FROM produk_pc");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td class="info"><?php echo $row['nama_produk'];?></td><!--namaatribut-->
			<td class="warning"><?php echo $row['jenis_produk'];?></td>
			<!--
			<a href="update.php?id=<?php echo $row['nama_produk']; ?>" >Update</a>

			<a><a href="delete.php?id=<?php echo $row['nama_produk']; ?> ">Delete</a>

			<a><a href="insert.php?id=<?php echo $row['nama_produk']; ?>">Insert</a>-->
</a></td>
			
				
			
				
		
		</tr>
			 </tbody>
		<?php

	}
	?>
</table>
</div>
</center>
	</table>

</body>
</html>