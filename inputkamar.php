<!DOCTYPE html>
<html lang="en">
    <h3>Tambah Data Kamar</h3>
    <form method="post" action="inputaksikamar.php">
        <table>
            <tr>
                <td>Id_kamar</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Tipe_kamar</td>
                <td><input type="text" name="tpk"></td>
            </tr>
            <tr>
                <td>Harga_kamar/malam</td>
                <td><input type="text" name="hkm"></td>
            </tr>
            <tr>
                <td>Status_kamar</td>
                <td><input type="text" name="sk"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
</form>
</html>