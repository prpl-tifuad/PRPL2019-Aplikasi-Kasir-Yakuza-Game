<?php
 include 'koneksi.php';

$id_pelanggan = $_GET['id'];

$SQL = mysqli_query($koneksi,"DELETE FROM pelanggan where id_pelanggan = '$id_pelanggan'");
// die("testing");
if($SQL){
header("location:DataPelanggan.php?pesan=hapus");
 }
 else{
header("location:DataPelanggan.php?pesan=gagalhapus");
}
 	?>
