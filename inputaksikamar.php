<?php
include 'koneksi.php';

$id_kamar = $_POST['id'];
$tipe_kamar = $_POST['tpk'];
$harga_kamar = $_POST['hkm'];
$status_kamar = $_POST['sk'];

mysqli_query($koneksi,"insert into kamar values('$id_kamar', '$tipe_kamar', '$harga_kamar', '$status_kamar')");
header("location:kamar.php");
?>