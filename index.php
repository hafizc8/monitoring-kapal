<?php 
    session_start();
    if (!isset($_SESSION['nama_lengkap'])) {
        echo "<script language=\"javascript\">alert(\"Silahkan login terlebih dahulu!\");document.location.href='login.php';</script>";
    }
?>
<?php 
    include 'header.php';
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Kapal</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-ship me-1"></i>
                Data Kapal
            </div>
            <div class="card-body">
                <a href="form-tambah-kapal.php" class="btn btn-primary mb-3">Tambah Baru</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Kapal</th>
                            <th>Tgl Tiba</th>
                            <th>Tgl Berangkat</th>
                            <th>Tgl Input Admin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=1; $i<=15; $i++): ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td>TK. SUMBER KENCANA <?= $i ?></td>
                                <td>18 Jun 2022</td>
                                <td>22 Jun 2022</td>
                                <td>18 Jun 2022, 22:30</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-info text-white">Lihat</a>
                                    <a href="#" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endfor ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer.php';
?>