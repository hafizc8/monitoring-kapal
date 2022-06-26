<?php 
    include "../koneksi.php";

    $sql = "SELECT * FROM data_kapal ORDER BY tgl_input DESC";

    $query = mysqli_query($koneksi, $sql);
    $response = [];
    $data = [];

    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $response = [
        'status' => 'success',
        'data' => $data
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
?>