<?php
 include 'koneksi.php';

$nomor_pc = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM prosesbayar where nomor_pc = '$nomor_pc'");
// die("testing");
header("location:datatransaksi.php");
 ?>
