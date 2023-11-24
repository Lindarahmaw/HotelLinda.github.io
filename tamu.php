<!DOCTYPE html>
<html lang="en">
<head>
<style>
        h2 {
            color: black;
        }
    table {
        border-collapse: collapse;
        width: 90%;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: wheat ;
    }

    tr{
        background-color: grey;
    }

    a {
        text-decoration: none;
        margin-right: 10px;
    }
</style>
</head>    
Tabel Tamu
<table border="1">
    <tr>
        <td>Id tamu</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Nomer telepon</td>
        <td>Informasi ktp/paspor</td>
        <td>Status</td>
        <td>Aksi</td>
    </tr>
    

<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi, "select * from tamu");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil['Id_tamu'] ?> </td>
    <td> <?php echo $tampil['Nama'] ?> </td>
    <td> <?php echo $tampil['Alamat'] ?> </td>
    <td> <?php echo $tampil['Nomer_telepon'] ?> </td>
    <td> <?php echo $tampil['Informasi_ktp/paspor'] ?> </td>
    <td> <?php echo $tampil['Status'] ?> </td>
    <td><a href="hapustamu.php?id=<?php echo $tampil['Id_tamu']; ?>">hapus</a>
    <a href="edittamu.php?id=<?php echo $tampil['Id_tamu']; ?>">edit</a></td>
</tr>

<?php
    }
?>
</table>
<a href="inputtamu.php"> Tambahkan Data Baru </a>
</html>