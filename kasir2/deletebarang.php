<?php
 include 'koneksi.php';

$nomor_pc = $_GET['id'];

$SQL = mysqli_query($koneksi,"DELETE FROM kategori_pc where nomor_pc = '$nomor_pc'");
// die("testing");
if ($SQL) {
header("location:barangproduk.php?=hapus");
}else{
header("location:barangproduk.php?pesan=gagalhapus");
}
 ?>
