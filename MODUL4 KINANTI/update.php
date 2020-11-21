<?php
include "database.php";
$id = $_COOKIE['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$handphone = $_POST['handphone'];
$sandi = $_POST['sandi'];
$warna = $_POST['warna'];


$daftar = mysqli_query($connect, "UPDATE user set nama = '$nama', email = '$email', no_hp = '$handphone' WHERE id = $id");
if ($daftar) {
    setcookie("update", "benar");


    if ($warna == "blue") {
        setcookie("warna", "#16697a");
    } else {
        setcookie("warna", "");
    }

    header("location: profile.php");
} else {
    echo "gagal";
}
