<?php
 include '../koneksi.php';
 $awal = $_POST['id'];
 $nomor_pc = $_POST['nomor_pc'];
 $kelengkapan_pc = $_POST['kelengkapanpc'];

 $sql = mysqli_query($koneksi, "UPDATE `kategori_pc` SET `nomor_pc`='$nomor_pc',`kelengkapan_pc`='$kelengkapan_pc' WHERE `nomor_pc`='$awal'");
 if($sql){
 	header("Location:./../barangproduk.php?pesan=update");
 }
 else{
 	header("Location:./../updatebarang.php?pesan=gagal");
 }
