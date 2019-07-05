<?php
 include '../koneksi.php';
 $awal = $_POST['id'];
 $nama_produk = $_POST['nama_produk'];
 $jenis_produk = $_POST['jenis_produk'];

 $sql = mysqli_query($koneksi, "UPDATE `produk_pc` SET `nama_produk`='$nama_produk',`jenis_produk`='$jenis_produk' WHERE `nama_produk`='$awal'");
 if($sql){
 	header("Location:./../produkpc.php?pesan=update");
 }
 else{
 	header("Location:./../produkpc.php?pesan=gagal");
 }
