<?php 
    include "koneksi.php";

    $id_user = $_GET['id_user'];
    $query = "DELETE FROM users WHERE id = '$id_user'";
    
    if (mysqli_query($koneksi, $query)) {
        header("location:operator.php");
    } else {
        echo "<script language=\"javascript\">alert(\"Gagal menghapus data user, coba beberapa saat lagi!\");history.back();</script>";
    }
?>