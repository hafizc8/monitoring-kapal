<?php 
    include "koneksi.php";

    if (isset($_POST['tambah'])) {
        $username = $_POST['username'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $password = $_POST['password'];
        $level = $_POST['level'];
    
        if ($username == "" || $nama_lengkap == "" || $password == "" || $level == "") {
            echo "<script language=\"javascript\">alert(\"Isi form dengan lengkap!\");history.back();</script>";
            exit;
        }
    
        $query = "INSERT INTO users (username, nama_lengkap, password, level) values('$username', '$nama_lengkap', '$password', '$level')";
    
        if (mysqli_query($koneksi, $query)) {
            header("location:operator.php");
        } else {
            echo "<script language=\"javascript\">alert(\"Gagal menginput data user, coba beberapa saat lagi!\");history.back();</script>";
        }
    }
?>