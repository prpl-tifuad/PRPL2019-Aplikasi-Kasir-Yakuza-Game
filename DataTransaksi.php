<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transaksi</title>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>

<body>
	<div id="body">
<nav class="navbar navbar-inverse"">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">YakuzaGame.co.id</a>
    </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="barangproduk.php">Kategori PC</a></li>
        <li><a href="karyawan.php">Karyawan</a></li> 
        <li><a href="produkpc.php">Produk PC</a></li>
        <li><a href="DataPelanggan.php">Data Pelanggan</a></li>
        <li><a href="DataTransaksi.php">Data Pembayaran</a></li> 
      </ul>
      <form class="navbar-form navbar-right" method="post" action="search.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="cari">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
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
    -webkit-text-stroke: 2px #ffffff;">Proses Pembayaran</h1>
	<!--<form class="form-inline md-form mr-auto mb-4" method="post" action="search.php">
  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="cari">
  <button class="btn btn-success" type="submit">Search</button>-->
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
			<td class="success"><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td class="active"><?php echo $row['nama_produk'];?></td>
			<td class="danger"><?php echo $row['id_pelanggan'];?></td>
			<td class="info"><?php echo $row['id_karyawan'];?></td>
			<td class="warning"><?php echo $row['tanggal'];?></td>
			<td class="danger"><?php echo $row['waktu_pemakain']." Jam";?></td>
			<td class="success"><?php echo "Rp."." ". $row['harga'];?></td>
				<td class="info">
			<a href="update.php?id=<?php echo $row['nomor_pc']; ?>" >
				<button type="button" class="">Update</a></button> ||

			<a href="delete.php?id=<?php echo $row['nomor_pc']; ?> ">
			<button type="button" class="">Delete</a></button>
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
    <button type="button" class="btn btn-danger">Tambah</button>
</a>

 </center>
</body>
</html>