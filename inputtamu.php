<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body{
                font-family: sans-serif;
	background: #grey;

            }
        </style>
    </head>
    <h3>Tambah Data Tamu</h3>
    <form method="post" action="inputaksitamu.php">
        <table>
            <tr>
                <td>Id_tamu</td>
                <td><input type="number" name="idt"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nma"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alm"></td>
            </tr>
            <tr>
                <td>Nomer_telepon</td>
                <td><input type="text" name="nt"></td>
            </tr>
            <tr>
                <td>Informasi_ktp/paspor</td>
                <td><input type="text" name="ikp"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><input type="text" name="st"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
</form>
</html>