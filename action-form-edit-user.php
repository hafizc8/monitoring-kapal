<?php 
    include "koneksi.php";

    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "UPDATE users SET nama_lengkap = '$nama_lengkap', username = '$username', password = '$password', level = '$level' WHERE id = '$id_user'";

    if (mysqli_query($koneksi, $sql)) {
        header("location:operator.php");
    } else {
        echo "<script language=\"javascript\">alert(\"Gagal mengupdate data user, coba beberapa saat lagi!\");history.back();</script>";
    }
?>