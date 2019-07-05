<?php
 include '../koneksi.php';

 $id_pelanggan = $_POST['idpelanggan'];
 $nama = $_POST['namapelanggan'];

 $sql = mysqli_query($koneksi, "INSERT INTO `pelanggan`(`id_pelanggan`, `nama`) VALUES ('$id_pelanggan','$nama')");
 if($sql){
 	header("Location:./../DataPelanggan.php?pesan=berhasil");
 }
 else{
 	header("Location:./../inputpelanggan.php?pesan=gagal");
 }
