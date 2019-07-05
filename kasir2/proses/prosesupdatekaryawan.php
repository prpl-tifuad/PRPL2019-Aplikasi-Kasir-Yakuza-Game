<?php
 include '../koneksi.php';
 $awal = $_POST['id'];
 $id_karyawan = $_POST['id_karyawan'];
 $nama_kar = $_POST['nama_kar'];
 $jadwal_shift = $_POST['jadwal_shift'];
 $nomor_hp = $_POST['nomor_hp'];

 $sql = mysqli_query($koneksi, "UPDATE `karyawan` SET `id_karyawan`='$id_karyawan',`nama_kar`='$nama_kar',`jadwal_shift`='$jadwal_shift',`nomor_hp`='$nomor_hp' WHERE `id_karyawan`='$awal'");
 if($sql){
 	header("Location:./../karyawan.php?pesan=update");
 }
 else{
 	header("Location:./../updatekaryawan.php?pesan=gagal");
 }
