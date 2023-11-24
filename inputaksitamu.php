<?php
include 'koneksi.php';

$id_tamu = $_POST['idt'];
$nama = $_POST['nma'];
$alamat = $_POST['alm'];
$nomer_telepon = $_POST['nt'];
$informasi_ktp = $_POST['ikp'];
$status = $_POST['st'];

mysqli_query($koneksi,"insert into tamu values('$id_tamu', '$nama', '$alamat', '$nomer_telpon', '$informasi_ktp', '$status')");
header("location:tamu.php");
?>