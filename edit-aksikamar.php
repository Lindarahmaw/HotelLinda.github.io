<?php
include 'koneksi';

$id kamar= $_POST['Id_kamar'];
$tipe kamar = $_POST ['Tipe_kamar'];
$harga kamar/malam = $_POST ['Harga_kamar/malam'];
$status kamar= $_POST ['Status_kamar'];

mysqli_query($koneksi, "update kamar set id_kamar='$Id_kamar', tipe kamar='$Tipe_kamar', harga kamar/malam='Harga_kamar/malam', status kamar='Status_kamar'");
header("location :kamar.php");
?>
