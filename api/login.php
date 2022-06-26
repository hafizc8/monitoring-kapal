<?php 
    include "../koneksi.php";

    $_POST = json_decode(file_get_contents('php://input'), true);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $query = mysqli_query($koneksi, $sql);

    $cek = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    $response = [];

    if ($cek > 0) {
        $response = [
            'status' => 'success',
            'data' => [
                'id' => $data['id'],
                'username' => $data['username'],
                'nama_lengkap' => $data['nama_lengkap'],
                'level' => $data['level'],
            ]
        ];
    } else {
        $response = [
            'status' => 'failed',
            'data' => null
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
?>