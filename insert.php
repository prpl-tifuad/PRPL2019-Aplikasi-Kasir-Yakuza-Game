<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
  </style>

</head>
<body>
		<CENTER>
  <h1 style="padding: 20px 0px 0px 0px">Masukkan Data Transaksi</h1><span> Create <i class='fa fa-paint-brush'></i> By <i class='fa fa-code'></i> by <a href='https://www.instagram.com/gilangasisramadann/'> Gilang Asis Ramadan</a></span></CENTER><hr>
</div>
<div class="form">
	<form method="post" action="insertsave.php">
		<table align="center">
			<tr class="form-group">
				<td>Nomor PC</td>
				<td> : </td>
				<td> <input type ="text" class="form-control" name="nomor_pc"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td> : </td>
				<td> <select class="form-control" name="nama_produk">
					<option value="LG">LG</option>
					<option value="Polytron">Polytron</option>
					<option value="Samsung">Samsung</option>
				</select>
				</td>
			
			<tr>
				<tr>
				<td>Pelanggan</td>
				<td> : </td>
				<td> <select class="form-control" name="id_pelanggan">
					<option value="101">Gilang Asis Ramadan</option>
					<option value="102">Binta Wahyu</option>
					<option value="103">Dimas Aji</option>
					<option value="104">Abi Fajar</option>
					<option value="105">Lalu Arfi</option>
					<option value="106">Dian Ramadhani</option>
					<option value="107">Tyo Idzhar</option></select>
				</td>
			
			<tr>
					<tr>
				<td>Id Karyawan</td>
				<td> : </td>
				
				<td> <select class="form-control" name="id_karyawan">
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option>
					<option value="006">006</option>
					<option value="007">007</option>
				</select>
				</td>
			<tr>
				<tr>
					<td>Date</td>
					<td> : </td>
					<td><input type="date" class="form-control" name="tanggal"></td>
				</tr>
			</tr>
			
			<tr>
					<tr>
				<td>Waktu Bermain</td>
				<td> : </td>
				<td> <input type ="text" class="form-control" name="waktu_bermain"></td>
			
			<tr>
				<!-- 	<tr>
				<td>Harga</td>
				<td> : </td>
				<td> <input type ="text" class="form-control" name="harga"></td>
			
			</tr> -->
			<td></td>
			<td></td>
			<br>
				
			</tr>
			
		</table><br><center>
		<button class="btn btn-success">Tambah</button>
		<button  class="btn btn-primary" type="reset">Reset</button>
		</center><br>
		<br>
		</form>
	</div>
	<center>
	<a href="datatransaksi.php"><button class="btn btn-success">Kembali</button></a>
	</center>
	<!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>-->

	</form>
</body>
</html>