<?php 
    session_start();
    if (!isset($_SESSION['nama_lengkap'])) {
        echo "<script language=\"javascript\">alert(\"Silahkan login terlebih dahulu!\");document.location.href='login.php';</script>";
    }

    include "koneksi.php";

    $query = "SELECT * FROM data_kapal";
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
                            <th>Status Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data as $v): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $v['nama_kapal'] ?></td>
                                <td><?= $v['tgl_tiba'] ?? '-' ?></td>
                                <td><?= $v['tgl_berangkat'] ?? '-' ?></td>
                                <td><?= $v['tgl_input'] ?></td>
                                <td>
                                    <?php if (
                                        $v['spb'] != null && $v['manifest'] != null && $v['crewlist'] != null && $v['buku_kesehatan'] != null && $v['buku_pelaut'] != null && $v['ijazah_perwira'] != null && $v['bst'] != null && $v['pasport'] != null && $v['surat_laut'] != null && $v['surat_ukur'] != null && 
                                        $v['serti_konstruksi'] != null && $v['serti_perlengkapan_barang'] != null && $v['serti_radio'] != null && $v['serti_lambung'] != null && $v['serti_mesin'] != null && $v['serti_garis_muat'] != null && $v['serti_pencemaran'] != null && $v['minimum_safe_manning'] != null && $v['serti_anti_teritip'] != null && $v['serti_liferaft'] != null && 
                                        $v['serti_damkar'] != null && $v['hru'] != null && $v['doc'] != null && $v['serti_keselamatan_sementara'] != null && $v['rpt'] != null && $v['buku_sijil'] != null && $v['pkl'] != null && $v['sscec'] != null && $v['wreak'] != null && $v['clc'] != null && 
                                        $v['orb'] != null && $v['izin_stasiun_radio'] != null && $v['serti_asuransi_kapal'] != null && $v['siupal'] != null && $v['sk_susunan_perwira'] != null && $v['stempel_kapal'] != null
                                    ) : ?>
                                        <span class="badge bg-success">Sudah Lengkap</span>
                                    <?php else : ?>
                                        <span class="badge bg-warning">Belum Lengkap</span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <a href="form-edit-kapal.php?id_kapal=<?= $v['id_kapal'] ?>" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="action-hapus-kapal.php?id_kapal=<?= $v['id_kapal'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
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