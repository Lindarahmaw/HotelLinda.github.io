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
Tabel Staf

<table border="1">
    <tr>
        <td>Id staf</td>
        <td>Nama</td>
        <td>Jabatan</td>
        <td>Nomer telepon</td>
        <td>Aksi</td>
    </tr>

<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi, "select * from staf");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil['Id_staf'] ?> </td>
    <td> <?php echo $tampil['Nama'] ?> </td>
    <td> <?php echo $tampil['Jabatan'] ?> </td>
    <td> <?php echo $tampil['Nomer_telepon'] ?> </td>
    <td><a href="hapusstaf.php?id=<?php echo $tampil['Id_staf']; ?>">hapus</a>
    <a href="editstaf.php?id=<?php echo $tampil['Id_staf']; ?>">edit</a></td>
</tr>

<?php
    }
?>
</table>
<a href="inputstaf.php"> Tambahkan Data Baru </a>
</html>