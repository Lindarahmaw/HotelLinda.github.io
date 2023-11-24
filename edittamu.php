<html>
    <a href="tamu.php">Kembali</a>
    <h3>Edit Tamu</h3>

<?php
include 'koneksi.php';
$tamu = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tamu where id_tamu='$tamu'");
while ($tampil = mysqli_fetch_array($data)) {
?>
<form method="post" action="edit-aksitamu.php";
    <table>
    <tr>
        <td>Id tamu</td>
        <td><input type="number" name="idt" value="<?php echo $tampil['Id_tamu'];?>"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td><input type="number" name="nma" value="<?php echo $tampil['Nama'];?>"></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td><input type="number" name="alm" value="<?php echo $tampil['Alamat'];?>"></td>
    </tr>

    <tr>
        <td>Nomer Telpon</td>
        <td><input type="number" name="nt" value="<?php echo $tampil['Nomer_telepon'];?>"></td>
     </tr>

     <tr> 
        <td>Informasi ktp/paspor</td>
        <td><input type="number" name="ikp" value="<?php echo $tampil['Informasi_ktp/paspor'];?>"></td>
     </tr>

     <tr>
        <td>Status</td>
        <td><input type="number" name="st" value="<?php echo $status['Status'];?>"></td>
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
