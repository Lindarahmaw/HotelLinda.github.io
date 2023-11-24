<?php 
include("../koneksi.php");
if (!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi,$query);
if (mysqli_num_rows($result) == 1) {
    header("Location:index2.php ");
}else{
    echo "Login.gagal Silahkan cek kembali username dan password Anda.";
}
mysqli_close($koneksi);
?>