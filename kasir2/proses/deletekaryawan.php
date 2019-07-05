<?php
 include '../koneksi.php';

$id_karyawan = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM karyawan where id_karyawan = '$id_karyawan'");
// die("testing");
header("location:./../karyawan.php?pesan=hapus");
 ?>
