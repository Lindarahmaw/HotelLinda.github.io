<html>
    <a href="staf.php">Kembali</a>
    <h3>Edit Staf</h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from staf");
while ($tampil = mysqli_fetch_array($data)) {
?>
<form method="post" action="edit-aksi-staf.php";
    <table>
    <tr>
        <td>Id Staf</td>
        <td><input type="number" name="id" value="<?php echo $tampil['Id_staf'];?>"></td>
    </tr>

    <tr>
        <td>Nama</td>
        <td><input type="number" name="nm" value="<?php echo $tampil['Nama'];?>"></td>
    </tr>

    <tr>
        <td>Jabatan</td>
        <td><input type="number" name="jbt" value="<?php echo $tampil['Jabatan'];?>"></td>
    </tr>

    <tr>
        <td>Nomer Telepon</td>
        <td><input type="number" name="ntp" value="<?php echo $tampil['Nomer_telepon'];?>"></td>
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
