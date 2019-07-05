<?php
 include 'koneksi.php';

$nama_produk = $_GET['id'];

$SQL = mysqli_query($koneksi,"DELETE FROM produk_pc where nama_produk = '$nama_produk'");
// die("testing");
if($SQL){
header("location:produkpc.php?pesan=hapus");
 }
 else{
header("location:produkpc.php?pesan=gagalhapus");
}
 	?>
