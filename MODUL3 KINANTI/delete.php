<?php
include ('connect.php');

$id = $_GET['id'];

$query= "DELETE From modul3_crud where id='$id' ";
$delete= mysqli_query($conn, $query);
header("location:home.php");