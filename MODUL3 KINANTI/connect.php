<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $db = "wad_modul3_kinanti";

    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn){
        echo "<script>
                alert('Failed Connect into Database');
            </script>";
    }
