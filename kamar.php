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
Tabel Kamar
<table border="1">
    <tr>
        <td>Id kamar</td>
        <td>Tipe kamar</td>
        <td>Harga kamar/malam</td>
        <td>Status kamar</td>
        <td>Aksi</td>
    </tr>

<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi, "select * from kamar");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil['Id_kamar'] ?> </td>
    <td> <?php echo $tampil['Tipe_kamar'] ?> </td>
    <td> <?php echo $tampil['Harga_kamar/malam'] ?> </td>
    <td> <?php echo $tampil['Status_kamar'] ?> </td>
    <td><a href="hapuskamar.php?id=<?php echo $tampil['Id_kamar']; ?>">hapus</a>
    <a href="editkamar.php?id=<?php echo $tampil['Id_kamar']; ?>">edit</a></td>
</tr>

<?php
    }
?>
</table>
<a href="inputkamar.php"> Tambahkan Data Baru </a>
</html>