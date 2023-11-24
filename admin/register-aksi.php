<?php 
include("../koneksi.php")
if(!koneksi){
    die("Koneksi gagal:" . mysqli_connect_error());
}
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashedPassword = password_hash($password,PASSWORD_DEFAULT);
$query = "INSERT INTO login (email, username, password) VALUES ('$email,','$username','$password')";
$result = mysqli_query($koneksi, $query);
if ($result) {
    header("Location: login.php");
}else{
    echo"Register gagal.Silahkan coba lagi.";
}
mysqli_close($koneksi);
?>