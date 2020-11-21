<?php

include "database.php";

$item = $_GET['item'];
$id = $_COOKIE['id'];

if ($item == 1) {
    $beli = mysqli_query($connect, "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id', 'Cardamom & Cotton Flower Hand & Body Wash', '300000') ");
    if ($beli) {
        setcookie('beli', "true");
        header("location: home.php");
    } else {
    }
}

if ($item == 2) {
    $beli = mysqli_query($connect, "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id', 'Be Happy Shower Gel Feel Good', '600000') ");
    if ($beli) {
        setcookie('beli', "true");
        header("location: home.php");
    } else {
    }
}

if ($item == 3) {
    $beli = mysqli_query($connect, "INSERT INTO `cart`(`user_id`, `nama_barang`, `harga`) VALUES ('$id', 'Silk Beauty White Glow Body Wash', '800000') ");
    if ($beli) {
        setcookie('beli', "true");
        header("location: home.php");
    } else {
    }
}
