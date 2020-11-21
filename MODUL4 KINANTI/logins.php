<?php
include "database.php";

$email = $_POST['email'];
$sandi = $_POST['sandi'];
$check = $_POST['remember'];

$query = mysqli_query($connect, "SELECT * FROM user where email = '$email'");

if (!mysqli_num_rows($query)) {
    header("location:login.php");
    setcookie('login', "nodaftar");
}

while ($password = mysqli_fetch_array($query)) {
    if ($password['password'] == $sandi) {
        setcookie('login', "1");
        if ($check == 1) {
            setcookie("email", $email);
            setcookie("password", $sandi);
        } else {
            setcookie("email", "");
            setcookie("password", "");
        }
        setcookie("nama", $password['nama']);
        setcookie("id", $password['id']);
        header("location:home.php");
    } else {
        header("location:login.php");
        setcookie('login', "passwordsalah");
    }
}