<?php 
    include "koneksi.php";

    $id_invoice = $_GET['id_invoice'];
    $query = "DELETE FROM invoice WHERE id_invoice = '$id_invoice'";
    
    if (mysqli_query($koneksi, $query)) {
        $query2 = "DELETE FROM invoice_detail WHERE id_invoice = '$id_invoice'";
        if (mysqli_query($koneksi, $query2)) {
            header("location:invoice.php");
        }
    } else {
        echo "<script language=\"javascript\">alert(\"Gagal menghapus data kapal, coba beberapa saat lagi!\");history.back();</script>";
    }
?>