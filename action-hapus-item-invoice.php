<?php 
    include "koneksi.php";

    $id_invoice = $_GET['id_invoice'];
    $id_item = $_GET['id_item'];
    $query = "DELETE FROM invoice_detail WHERE id = '$id_item'";
    
    if (mysqli_query($koneksi, $query)) {
        header("location:form-invoice-detail.php?id_invoice=".$id_invoice);
    } else {
        echo "<script language=\"javascript\">alert(\"Gagal menghapus item invoice, coba beberapa saat lagi!\");history.back();</script>";
    }
?>