<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $port = "8889";
    $database = "monitoring-kapal";

    $koneksi = mysqli_connect($hostname, $username, $password, $database, $port);

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>