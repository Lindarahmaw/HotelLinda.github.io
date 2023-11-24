<html>
    <a href="reservasi.php">Kembali</a>
    <h3>Edit Reservasi</h3>

<?php
include 'koneksi.php';
$reservasi = $_GET['id'];
$data = mysqli_query($koneksi,"select * from reservasi where id_reservasi='$reservasi'");
while ($tampil = mysqli_fetch_array($data)) {
?>
<form method="post" action="edit-aksireservasi.php";
    <table>
    <tr>
        <td>Id reservasi</td>
        <td><input type="number" name="idr" value="<?php echo $tampil['Id_reservasi'];?>"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td><input type="number" name="nma" value="<?php echo $tampil['Nama'];?>"></td>
    </tr>

    <tr>
        <td>Id tamu</td>
        <td><input type="number" name="idt" value="<?php echo $tampil['Id_tamu'];?>"></td>
    </tr>

    <tr>
        <td>Id kamar</td>
        <td><input type="number" name="idk" value="<?php echo $tampil['Id_kamar'];?>"></td>
     </tr>

     <tr>
        <td>Id staf</td>
        <td><input type="number" name="ids" value="<?php echo $tampil['Id_staf'];?>"></td>
     </tr>

     <tr> 
        <td>Tanggal checkin</td>
        <td><input type="number" name="tck" value="<?php echo $tampil['Tanggal_checkin'];?>"></td>
     </tr>

     <tr>
        <td>Tanggal checkout</td>
        <td><input type="number" name="tco" value="<?php echo $status['Tanggal_checkout'];?>"></td>
     </tr>

     <tr>
        <td>Total biaya</td>
        <td><input type="number" name="tby" value="<?php echo $status['Total_biaya'];?>"></td>
     </tr>

     <tr>
        <td>Jumlah Tamu</td>
        <td><input type="number" name="jt" value="<?php echo $status['Jumlah_tamu'];?>"></td>
     </tr>

     <tr>
        <td><input type="submit" value="simpan"></td>
     </tr>
    </table>
</form>
<?php
}
?>
</html>
