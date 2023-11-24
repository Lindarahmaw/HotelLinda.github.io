<?php
include 'koneksi.php';

$id_reservasi = $_POST['idr'];
$nama = $_POST['nma'];
$id_tamu = $_POST['idt'];
$id_kamar = $_POST['idk'];
$id_staf = $_POST['ids'];
$tanggal_checkin= $_POST['tck'];
$tanggal_checkout= $_POST['tco'];
$total_biaya = $_POST['tby'];
$jumlah_tamu = $_POST['jt'];

mysqli_query($koneksi,"insert into reservasi values('$id_reservasi', '$nama', '$id_tamu', '$id_kamar', '$id_staf', '$tanggal_checkin','$tanggal_checkout','$total_biaya','$jumlah_tamu')");
header("location:reservasi.php");
?>