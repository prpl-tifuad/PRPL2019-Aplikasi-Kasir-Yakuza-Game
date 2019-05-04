<?php
	include 'koneksi.php';

		$nomor_pc = $_POST['nomor_pc'];
		$nama_produk = $_POST['nama_produk'];
		$id_pelanggan = $_POST['id_pelanggan'];
		$id_karyawan = $_POST['id_karyawan'];
		$tanggal = $_POST['tanggal'];
		$waktu_pemakain = $_POST['waktu_bermain'];
		$harga = 0;
		$harga = $waktu_pemakain*5000;
		// $harga = $_POST['harga'];
		

		$sql =mysqli_query($koneksi,"INSERT INTO prosesbayar (nomor_pc, nama_produk, id_pelanggan, id_karyawan, tanggal, waktu_pemakain, harga) VALUES ('$nomor_pc','$nama_produk','$id_pelanggan','$id_karyawan', '$tanggal','$waktu_pemakain','$harga')");
if ($sql) {
	# code...
header('location:DataTransaksi.php');
}else{
echo "Gagal menyimpan data";
}
?>	