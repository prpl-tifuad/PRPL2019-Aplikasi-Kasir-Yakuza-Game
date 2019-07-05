<html lang="en">
<head>
	<title>Barang Produk</title>
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
    
</nav>
<body>
<div class="container">
	<div class="jumbotron" style="margin: 0px;background-color: rgba(245, 245, 245, 0.4);padding-top: 0px;">
  <hr style="border: 0px solid #fff">
  <h1 style="font-family: fantasy;
    text-transform: uppercase;
    -webkit-text-stroke: 2px #ffffff;">Data Karyawan</h1>

    <?php 
    if(isset($_GET['pesan'])){
    	?>
    	<div class="alert alert-danger" role="alert">
		  <b>Gagal Di Simpan</b>
		</div><?php 
		    }
		    ?>
	<form method="post" action="./proses/prosesinputkaryawan.php">

  <div class="form-group">
    <label for="" style="color: white;">ID Karyawan</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="idkaryawan" aria-describedby="emailHelp" placeholder="ID Karyawan">
  </div>
  <div class="form-group">
    <label for="" style="color: white;">Nama Karyawan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="namakaryawan" aria-describedby="emailHelp" placeholder="Nama Karyawan">
  </div>
  <div class="form-group">
    <label for="" style="color: white;">Jadwal Shift</label>
  	<input type="time" name="jadwalshift" class="form-control" placeholder="jadwalshift">
  </div>
  <div class="form-group">
    <label for="" style="color: white;">Nomor HP</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="nomorhp" aria-describedby="emailHelp" placeholder="Nomor HP">
  </div>
  <button type="submit" class="btn btn-danger">Tambah</button>
  <a href="karyawan.php"><input class="btn btn-link" type="button" value="Kembali"></input></a>
</form>         
  
	
</div>
</div>
</body>
</body>
</html>