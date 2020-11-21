<?php
include "database.php";

$id = $_GET['id'];
mysqli_query($connect, "delete from cart where id = '$id'");
setcookie("hapus", "berhasil");
header("location: keranjang.php");