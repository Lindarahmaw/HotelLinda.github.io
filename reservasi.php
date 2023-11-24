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
Tabel Reservasi
<table border="1">
    <tr>
        <td>Id reservasi</td>
        <td>Nama</td>
        <td>Id tamu</td>
        <td>Id kamar</td>
        <td>Id staf</td>
        <td>Tanggal Checkin</td>
        <td>Tanggal Checkout</td>
        <td>Total biaya</td>
        <td>Jumlah tamu</td>
        <td>Aksi</td>
    </tr>

<?php
    include "koneksi.php";
    $data=mysqli_query($koneksi, "select * from reservasi");
    while($tampil=mysqli_fetch_array($data)){
?>
<tr>
    <td> <?php echo $tampil['Id_reservasi'] ?> </td>
    <td> <?php echo $tampil['Nama'] ?> </td>
    <td> <?php echo $tampil['Id_tamu'] ?> </td>
    <td> <?php echo $tampil['Id_kamar'] ?> </td>
    <td> <?php echo $tampil['Id_staf'] ?> </td>
    <td> <?php echo $tampil['Tanggal_checkin'] ?> </td>
    <td> <?php echo $tampil['Tanggal_checkout'] ?> </td>
    <td> <?php echo $tampil['Total_biaya'] ?> </td>
    <td> <?php echo $tampil['Jumlah_tamu'] ?> </td>
    <td><a href="hapusreservasi.php?id=<?php echo $tampil['Id_reservasi']; ?>">hapus</a>
    <a href="editreservasi.php?id=<?php echo $tampil['Id_reservasi']; ?>">edit</a></td>
</tr>

<?php
    }
?>
</table>
<a href="inputreservasi.php"> Tambahkan Data Baru </a>
</html>