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
<nav class="navbar navbar-expand-sm navbar-dark bg-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
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
    
</nav>
<body>

<div class="container">
	<div class="jumbotron" style="margin: 0px;background: #8abce6;padding-top: 0px;">
  <hr style="border: 1px solid #fff">
  <h1><centre style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Proses Pembayaran</centre></h1>
	<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>
</form>
	<div class="table-responsive">
	<table id="mytable" class="table table-bordred table-striped" >
		 <thead>
		<tr >
			<th >Nomor PC</th>
			<th >Nama Produk</th>
			<th >ID Pelanggan</th>
			<th >ID Karyawan</th>
			<th >Date</th>
			<th >Waktu Pemakaian</th>
			<th >Harga</th>
			<th >Tools</th>
			</tr>
	
		</thead>

	<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM prosesbayar");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['nama_produk'];?></td>
			<td ><?php echo $row['id_pelanggan'];?></td>
			<td ><?php echo $row['id_karyawan'];?></td>
			<td ><?php echo $row['tanggal'];?></td>
			<td ><?php echo $row['waktu_pemakain']." Jam";?></td>
			<td ><?php echo "Rp."." ". $row['harga'];?></td>
				<td >
			<a href="update.php?id=<?php echo $row['nomor_pc']; ?>" >Update</a> ||

			<a href="delete.php?id=<?php echo $row['nomor_pc']; ?> ">Delete</a>
</td>
			</tr>
			 </tbody>
				
	<?php

	}
	?>
	</table>
	<br>  
   
     <center>
<a href="insert.php">
    <button class="btn btn-success" type="submit">Tambah</button>
</a>

 </center>
</body>
</html>