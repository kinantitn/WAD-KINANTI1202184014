<?php
include ('connect.php');

$id = $_GET['id'];

$query= "DELETE FORM modul3_crud where id='$id' ";
$delete= mysql_query($conn, $query);
header("location:home.php");
