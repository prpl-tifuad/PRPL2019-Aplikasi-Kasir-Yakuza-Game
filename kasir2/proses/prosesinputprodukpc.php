<?php
 include '../koneksi.php';

 $nama_produk = $_POST['namaprodukpc'];
 $jenis_produk = $_POST['jenisprodukpc'];

 $sql = mysqli_query($koneksi, "INSERT INTO `produk_pc`(`nama_produk`, `jenis_produk`) VALUES ('$nama_produk','$jenis_produk')");
 if($sql){
 	header("Location:./../produkpc.php?pesan=berhasil");
 }
 else{
 	header("Location:./../inputproduk.php?pesan=gagal");
 }
