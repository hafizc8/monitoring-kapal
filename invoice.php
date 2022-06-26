<?php 
    session_start();
    if (!isset($_SESSION['nama_lengkap'])) {
        echo "<script language=\"javascript\">alert(\"Silahkan login terlebih dahulu!\");document.location.href='login.php';</script>";
    }

    include "koneksi.php";

    $query = "
        SELECT 
            a.*, 
            b.nama_kapal,
            b.tgl_tiba,
            e.nama_kapal as nama_kapal2,
            e.tgl_tiba as tgl_tiba2,
            SUM(c.total) as jumlah
        FROM invoice AS a 
        INNER JOIN data_kapal AS b ON a.id_kapal = b.id_kapal
        LEFT JOIN invoice_detail as c ON a.id_invoice = c.id_invoice
        LEFT JOIN data_kapal AS e ON a.id_kapal2 = e.id_kapal
        GROUP BY a.id_invoice, a.nomor, a.id_kapal, a.tanggal, b.nama_kapal, b.tgl_tiba, e.nama_kapal, e.tgl_tiba
        ORDER BY id_invoice ASC
    ";
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
                            <th>Nama Kapal (Tgl Tiba)</th>
                            <th>Tanggal Invoice</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data as $v): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $v['nomor'] ?></td>
                                <td>
                                    1. <?= ($v['nama_kapal'] ?? '-').' <b>('.($v['tgl_tiba'] != null ? date('d/m/Y', strtotime($v['tgl_tiba'])) : '-').')</b>' ?><br>
                                    2. <?= $v['nama_kapal2'] == '' ? '-' : ($v['nama_kapal2'] ?? '-').' <b>('.($v['tgl_tiba2'] != null ? date('d/m/Y', strtotime($v['tgl_tiba2'])) : '-').')</b>' ?>
                                </td>
                                <td><?= date('d/m/Y', strtotime($v['tanggal'])) ?></td>
                                <td><?= rupiah($v['jumlah']) ?></td>
                                <td class="text-center">
                                    <a href="form-invoice-detail.php?id_invoice=<?= $v['id_invoice'] ?>" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="action-hapus-invoice.php?id_invoice=<?= $v['id_invoice'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                    <a href="cetak-invoice.php?id_invoice=<?= $v['id_invoice'] ?>" target="_blank" class="btn btn-sm btn-primary">Cetak</a>
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