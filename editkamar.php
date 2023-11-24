<html>
    <a href="kamar.php">Kembali</a>
    <h3>Edit Kamar</h3>


<?php
include 'koneksi.php';
$id = $_GET['id'];
$kamar= $_GET['id'];
$data=mysqli_query($koneksi,"select * from kamar where id_kamar='$kamar'");
while ($tampil=mysqli_fetch_array($data)) {
?>
<form method="post" action="edit-aksi-kamar.php";
    <table>
    <tr>
        <td>Id Kamar</td>
        <td><input type="number" name="id" value="<?php echo $tampil['Id_kamar'];?>"></td>
    </td>
    </tr>

    <tr>
        <td>Tipe kamar</td>
        <td><input type="number" name="tpk" value="<?php echo $tampil['Tipe_kamar'];?>"></td>
    </td>
    </tr>
    <tr>
        <td>Harga Kamar</td>
        <td><input type="number" name="hkm" value="<?php echo $tampil['Harga_kamar/malam'];?>"></td>
    </td>
    </tr>

    <tr>
        <td>Status Kamar</td>
        <td><input type="number" name="sk" value="<?php echo $tampil['Status_kamar'];?>"></td>
    </td>
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
