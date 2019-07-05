<?php
 include '../koneksi.php';

 $id_karyawan = $_POST['idkaryawan'];
 $nama_kar = $_POST['namakaryawan'];
 $jadwal_shift = $_POST['jadwalshift'];
 $nomor_hp = $_POST['nomorhp'];

 $sql = mysqli_query($koneksi, "INSERT INTO `karyawan`(`id_karyawan`, `nama_kar`, `jadwal_shift`, `nomor_hp`) VALUES ('$id_karyawan','$nama_kar','$jadwal_shift','$nomor_hp')");
 if($sql){
 	header("Location:./../karyawan.php?pesan=berhasil");
 }
 else{
 	header("Location:./../inputkaryawan.php?pesan=gagal");
 }
