<?php
include 'koneksi.php';

$id_staf = $_POST['ids'];
$nama = $_POST['nma'];
$jabatan = $_POST['jbt'];
$nomer_telepon = $_POST['nt'];

mysqli_query($koneksi,"insert into staf values('$id_staf', '$nama', '$jabatan', '$nomer_telepon')");
header("location:staf.php");
?>