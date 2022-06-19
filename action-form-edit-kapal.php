<?php 
    include "koneksi.php";

    if (isset($_POST['update'])) {
        $id_kapal = $_POST['id_kapal'];
        $nama_kapal = $_POST['nama_kapal'];
        $tanggal_tiba = $_POST['tanggal_tiba'] == NULL ? "NULL" : "'".$_POST['tanggal_tiba']."'";
        $tanggal_berangkat = $_POST['tanggal_berangkat'] == NULL ? "NULL" : "'".$_POST['tanggal_berangkat']."'";
        $tanggal_diterima = $_POST['tanggal_diterima'] == NULL ? "NULL" : "'".$_POST['tanggal_diterima']."'";
        $diserahkan_tanggal = $_POST['diserahkan_tanggal'] == NULL ? "NULL" : "'".$_POST['diserahkan_tanggal']."'";
        $tanggal_input = date("Y-m-d H:i:s");
    
        if ($nama_kapal == "") {
            echo "<script language=\"javascript\">alert(\"Nama kapal harus diisi!\");history.back();</script>";
            exit;
        }
    
        $query = "UPDATE data_kapal SET nama_kapal = '$nama_kapal', tgl_tiba = $tanggal_tiba, tgl_berangkat = $tanggal_berangkat, tgl_terima = $tanggal_diterima, tgl_diserahkan = $diserahkan_tanggal WHERE id_kapal = '$id_kapal'";
    
        if (mysqli_query($koneksi, $query)) {
            header("location:form-dokumen-kapal.php?id_kapal=".$id_kapal);
        } else {
            echo "<script language=\"javascript\">alert(\"Gagal mengupdate data kapal, coba beberapa saat lagi!\");history.back();</script>";
        }
    }
?>