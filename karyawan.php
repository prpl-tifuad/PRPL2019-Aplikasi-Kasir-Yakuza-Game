<!DOCTYPE html>
<html lang="en">
<head>
	<title>Karyawan</title>
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
</body>   
<div class="container">
  <div class="jumbotron" style="margin: 0px;background: #8abce6;padding-top: 0px;">
  <hr style="border: 0px solid #fff">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Data Karyawan</h1>
	<!--<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>-->
	<div class="table-responsive">
		<center>
	<table id="mytable" class="table table-bordred table-striped">
		 <thead>
		<tr >
			<th >ID Karyawan</th>
			<th >Jadwal Shift</th>
			<th >Nomor Handphone</th>
					<!--	<th >Tools</th>-->
			</tr>
	
		</thead>
		<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM karyawan");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td class="danger"><?php echo $row['id_karyawan'];?></td><!--namaatribut-->
			<td class="warning"><?php echo $row['jadwal_shift'];?></td>
			<td class="success"><?php echo $row['nomor_hp'];?></td>	
			<!--<a href="update.php?id=<?php echo $row['id_pelanggan']; ?>" >Update</a>

			<a><a href="delete.php?id=<?php echo $row['id_pelanggan']; ?> ">Delete</a>

			<a><a href="insert.php?id=<?php echo $row['id_pelanggan']; ?>">Insert</a>-->
			
				
			
				
		
		</tr>
			 </tbody>
		<?php

	}
	?>
	</table>
</body>
</html>