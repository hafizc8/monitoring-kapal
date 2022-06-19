<?php 
    include "koneksi.php";

    $id_kapal = $_GET['id_kapal'];
    $query = "DELETE FROM data_kapal WHERE id_kapal = '$id_kapal'";
    
    if (mysqli_query($koneksi, $query)) {
        header("location:index.php");
    } else {
        echo "<script language=\"javascript\">alert(\"Gagal menghapus data kapal, coba beberapa saat lagi!\");history.back();</script>";
    }
?>