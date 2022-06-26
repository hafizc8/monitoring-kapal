<?php 
    include "koneksi.php";

    if (isset($_POST['tambah'])) {
        $id_invoice = $_GET['id_invoice'];
        $keterangan = $_POST['keterangan'];
        $total = $_POST['total'];
    
        if ($keterangan == "") {
            echo "<script language=\"javascript\">alert(\"Keterangan harus diisi!\");history.back();</script>";
            exit;
        }

        if ($keterangan == "") {
            echo "<script language=\"javascript\">alert(\"Total harus diisi!\");history.back();</script>";
            exit;
        }
    
        $query = "INSERT INTO invoice_detail (id_invoice, keterangan, total) values('$id_invoice', '$keterangan', '$total')";
    
        if (mysqli_query($koneksi, $query)) {
            header("location:form-invoice-detail.php?id_invoice=".$id_invoice);
        } else {
            echo "<script language=\"javascript\">alert(\"Gagal menginput item invoice, coba beberapa saat lagi!\");history.back();</script>";
        }
    }
?>