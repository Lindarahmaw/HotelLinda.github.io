<?php
include 'koneksi';

$id tamu= $_POST['Id_tamu'];
$nama = $_POST ['Nama'];
$alamat = $_POST ['Alamat'];
$nomer telepon= $_POST ['Nomer_telepon'];
$informasi ktp/paspor= $_POST ['Informasi_ktp/paspor'];
$status= $_POST ['Status'];

mysqli_query($koneksi,"update tamu set id_tamu='$Id_tamu', nama='$Nama', alamat='$Alamat', nomer_telepon='$Nomer_telepon', informasi ktp/paspor='Informasi ktp/paspor',status='Status'");
header("location :tamu.php");
?>
