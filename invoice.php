<?php 
    session_start();
    if (!isset($_SESSION['nama_lengkap'])) {
        echo "<script language=\"javascript\">alert(\"Silahkan login terlebih dahulu!\");document.location.href='login.php';</script>";
    }

    include "koneksi.php";

    $query = "SELECT a.*, b.nama_kapal FROM invoice AS a INNER JOIN data_kapal AS b ON a.id_kapal = b.id_kapal";
    $sql = mysqli_query($koneksi, $query);

    $data = [];
    while($row = mysqli_fetch_array($sql))
    {
        $data[] = $row;
    }
?>
<?php 
    include 'header.php';
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Invoice Kapal</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Data Invoice Kapal
            </div>
            <div class="card-body">
                <a href="form-invoice-pilih-kapal.php" class="btn btn-primary mb-3">Tambah Baru</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nomor Invoice</th>
                            <th>Nama Kapal</th>
                            <th>Tanggal Invoice</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data as $v): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $v['nomor'] ?></td>
                                <td><?= $v['nama_kapal'] ?? '-' ?></td>
                                <td><?= $v['tanggal'] ?? '-' ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="#" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer.php';
?>