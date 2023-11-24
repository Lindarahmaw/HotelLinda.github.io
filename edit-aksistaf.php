<?php
include 'koneksi';

$id staf= $_POST['Id_staf'];
$nama = $_POST ['Nama'];
$jabatan = $_POST ['Jabatan'];
$nomer telepon= $_POST ['Nomer_telepon'];


mysqli_query($koneksi,"update staf set id_staf='$Id_staf', nama='$Nama',jabatan='$Jabatan',nomer telepon='$Nomer_telepon'");
header("location :staf.php");
?>