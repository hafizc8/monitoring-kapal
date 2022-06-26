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

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
?>