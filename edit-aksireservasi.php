<?php
include 'koneksi';

$id reservasi= $_POST['Id_reservasi'];
$nama = $_POST ['Nama'];
$id_tamu = $_POST ['Id_tamu'];
$id_kamar= $_POST ['Id_kamar'];
$id_staf= $_POST ['Id_staf'];
$tanggal_checkin= $_POST ['Tanggal_checkin'];
$tanggal_checkout= $_POST ['Tanggal_checkout'];
$total_biaya= $_POST ['Total_biaya'];
$jumlah_tamu= $_POST ['Jumlah_tamu'];

mysqli_query($koneksi,"update tamu set id_tamu='$Id_tamu', nama='$Nama', alamat='$Alamat', nomer_telepon='$Nomer_telepon', informasi ktp/paspor='Informasi ktp/paspor',status='Status'");
header("location :tamu.php");
?>
