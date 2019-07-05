<?php
 include '../koneksi.php';

 $nomor_pc = $_POST['nomorpc'];
 $kelengkapan_pc = $_POST['kelengkapanpc'];

 $sql = mysqli_query($koneksi, "INSERT INTO `kategori_pc`(`nomor_pc`, `kelengkapan_pc`) VALUES ('$nomor_pc','$kelengkapan_pc')");
 if($sql){
 	header("Location:./../barangproduk.php?pesan=berhasil");
 }
 else{
 	header("Location:./../inputbarang.php?pesan=gagal");
 }
