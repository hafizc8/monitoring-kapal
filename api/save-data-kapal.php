<?php 
    include "../koneksi.php";

    $_POST = json_decode(file_get_contents('php://input'), true);
    $id_kapal = $_POST['id_kapal'];
    $tgl_tiba = $_POST['tgl_tiba'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $tgl_terima = $_POST['tgl_terima'];
    $tgl_diserahkan = $_POST['tgl_diserahkan'];

    $sql = "UPDATE data_kapal SET tgl_tiba = '$tgl_tiba', tgl_berangkat = '$tgl_berangkat', tgl_terima = '$tgl_terima', tgl_diserahkan = '$tgl_diserahkan' WHERE id_kapal = '$id_kapal'";

    $response = [];
    if (mysqli_query($koneksi, $sql)) {
        $response = [
            'status' => 'success'
        ];
    } else {
        $response = [
            'status' => 'failed'
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>