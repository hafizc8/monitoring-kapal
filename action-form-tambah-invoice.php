<?php 
    include "koneksi.php";

    if (isset($_POST['tambah'])) {
        $id_kapal = $_POST['id_kapal'];
        $id_kapal2 = $_POST['id_kapal2'];
        $nomor = $_POST['nomor'];
        $tanggal_invoice = $_POST['tanggal_invoice'];
    
        if ($id_kapal == "" || $nomor == "" || $tanggal_invoice == "") {
            echo "<script language=\"javascript\">alert(\"Isi form dengan lengkap!\");history.back();</script>";
            exit;
        }
    
        $query = "INSERT INTO invoice (nomor, id_kapal, id_kapal2, tanggal) values('$nomor', $id_kapal, $id_kapal2, '$tanggal_invoice')";
    
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);
            header("location:form-invoice-detail.php?id_invoice=".$last_id);
        } else {
            echo "<script language=\"javascript\">alert(\"Gagal menginput invoice kapal, coba beberapa saat lagi!\");history.back();</script>";
        }
    }
?>