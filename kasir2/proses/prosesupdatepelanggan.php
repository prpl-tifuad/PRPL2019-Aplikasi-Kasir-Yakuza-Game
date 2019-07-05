<?php
 include '../koneksi.php';
 $awal = $_POST['id'];
 $id_pelanggan = $_POST['id_pelanggan'];
 $nama = $_POST['nama'];

 $sql = mysqli_query($koneksi, "UPDATE `pelanggan` SET `id_pelanggan`='$id_pelanggan',`nama`='$nama' WHERE `id_pelanggan`='$awal'");
 if($sql){
 	header("Location:./../DataPelanggan.php?pesan=update");
 }
 else{
 	header("Location:./../DataPelanggan.php?pesan=gagal");
 }
