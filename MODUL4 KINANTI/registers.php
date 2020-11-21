<?php
include "database.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];
$sandi = $_POST['sandi'];
$daftar = mysqli_query($connect,"INSERT INTO `user`(`nama`, `email`, `no_hp`, `password`) VALUES ('$nama', '$email', '$handphone', '$sandi') " );
if ($daftar){
    setcookie("register","benar");
    header("location:login.php");
}
else{
    echo "gagal";
}
?>