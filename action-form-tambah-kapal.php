<?php 
    include "koneksi.php";

    if (isset($_POST['tambah'])) {
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
    
        $query = "INSERT INTO data_kapal (nama_kapal, tgl_tiba, tgl_berangkat, tgl_terima, tgl_diserahkan, tgl_input) values('$nama_kapal', $tanggal_tiba, $tanggal_berangkat, $tanggal_diterima, $diserahkan_tanggal, '$tanggal_input')";
    
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);
            header("location:form-dokumen-kapal.php?id_kapal=".$last_id);
        } else {
            echo "<script language=\"javascript\">alert(\"Gagal menginput data kapal, coba beberapa saat lagi!\");history.back();</script>";
        }
    }
?>