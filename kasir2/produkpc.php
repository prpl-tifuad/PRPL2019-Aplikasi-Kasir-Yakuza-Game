<!DOCTYPE html>
<html lang="en">
<head>
	<title>Barang Produk</title>
	<link href="loginform.css" rel="stylesheet">
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
		body {
			padding-top: 70px;
		}
		</style>
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#">YakuzaGame.co.id</a>
      </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
	<div class="jumbotron" style="margin: 0px;background-color: rgba(245, 245, 245, 0.4);padding-top: 0px;">
  <hr style="border: 0px solid #fff">
  <?php 
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
    if($pesan == 'berhasil'){
    	?>
    	<div class="alert alert-success" role="alert">
		  <b>Data Berhasil di Masukkan</b>
		</div><?php 
		    }
		    else if($pesan == 'update'){
		    	?>
		    	<div class="alert alert-success" role="alert">
		  <b>Data Berhasil di Update</b>
		</div>
		    	<?php
		    }
		    else if($pesan == 'hapus'){
		    	?>
		    	<div class="alert alert-danger" role="alert">
		  <b>Data Berhasil di hapus</b>
		</div>
		    	<?php
		    }else if($pesan == 'gagal'){
		    	?>
		    	<div class="alert alert-danger" role="alert">
		  <b>Produk sedang digunakan, tidak bisa mengubah nama</b>
		</div>
		    	<?php
		    }else if($pesan == 'gagalhapus'){
		    	?>
		    	<div class="alert alert-danger" role="alert">
		  <b>Produk sedang digunakan, tidak bisa dihapus</b>
		</div>
		    	<?php
		    }

		}
		    ?>
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
			<th style="color: white;">Nama Produk PC</th>
			<th style="color: white;">Jenis Produk PC</th>
			<th style="color: white;">Tools</th>
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
			<td>
			<a href="updateproduk.php?id=<?php echo $row['nama_produk']; ?>" >Update</a> ||
			<a href="deleteproduk.php?id=<?php echo $row['nama_produk']; ?> ">Delete</a>
			</td>
		</tr>
			 </tbody>
		<?php

	}
	?>
</table>
</div>
</center>
	</table>
<center><a href="inputproduk.php"><button class="btn btn-danger">Tambah Produk PC</button></a></center>
</body>
</html>