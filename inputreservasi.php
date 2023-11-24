<!DOCTYPE html>
<html lang="en">
    <h3>Tambah Data Reservasi</h3>
    <form method="post" action="inputaksireservasi.php">
        <table>
            <tr>
                <td>Id_reservasi</td>
                <td><input type="number" name="idr"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nma"></td>
            </tr>
            <tr>
                <td>Id_tamu</td>
                <td><input type="text" name="idt"></td>
            </tr>
            <tr>
                <td>Id_kamar</td>
                <td><input type="text" name="idk"></td>
            </tr>
            <tr>
                <td>Id_staf</td>
                <td><input type="text" name="ids"></td>
            </tr>
            <tr>
                <td>Tanggal_checkin</td>
                <td><input type="text" name="tck"></td>
            </tr>
            <tr>
                <td>Tanggal_checkout</td>
                <td><input type="text" name="tco"></td>
            </tr>
            <tr>
                <td>Total_biaya</td>
                <td><input type="text" name="tby"></td>
            </tr>
            <tr>
                <td>Jumlah_tamu</td>
                <td><input type="text" name="jt"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
</form>
</html>