<?php 
    include "koneksi.php";

    $tanggal_tiba = $_GET['tanggal_tiba'];
    $sd_tanggal_tiba = $_GET['sd_tanggal_tiba'];
    $tanggal_berangkat = $_GET['tanggal_berangkat'];
    $sd_tanggal_berangkat = $_GET['sd_tanggal_berangkat'];

    if ($tanggal_tiba != '') {
        if ($sd_tanggal_tiba == '') {
            echo "<script language=\"javascript\">alert(\"Isi sd tanggal tiba!\");history.back();</script>";
            exit;
        }
    }

    if ($tanggal_berangkat != '') {
        if ($sd_tanggal_berangkat == '') {
            echo "<script language=\"javascript\">alert(\"Isi sd tanggal berangkat!\");history.back();</script>";
            exit;
        }
    }

    $query = "SELECT * FROM data_kapal";
    $where = [];
    if ($tanggal_tiba != '') {
        $where[] = "tgl_tiba BETWEEN '$tanggal_tiba' AND '$sd_tanggal_tiba'";
    }
    
    if ($tanggal_berangkat != '') {
        $where[] = "tgl_berangkat BETWEEN '$tanggal_berangkat' AND '$sd_tanggal_berangkat'";
    }

    $query = $query . " WHERE " . join(" AND ", $where);

    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Kapal</title>
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        @media print {
            html, body {
                border: 1px solid white;
                height: 99%;
                page-break-after: avoid !important;
                page-break-before: avoid !important;
            }
            .print-display-none,
            .print-display-none * {
                display: none !important;
            }
            .print-visibility-hide,
            .print-visibility-hide * {
                visibility: hidden !important;
            }
            .printme,
            .printme * {
                visibility: visible !important;
            }
            .printme {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid mt-5">
        <b>
            <img src="assets/img/logo-company.png" width="50px">
            PT. Pelayaran Laksita Aditya Parama
        </b>
        <hr>
        <h4>Laporan Data Kapal</h4>
        <table>
            <tr>
                <td width="150px">Tanggal Tiba</td>
                <td width="30px">:</td>
                <td>
                    <?php if ($tanggal_tiba != '') : ?>
                        <?= date('d/m/Y', strtotime($tanggal_tiba)) ?> sd. <?= date('d/m/Y', strtotime($sd_tanggal_tiba)) ?>
                    <?php else : ?>
                        -
                    <?php endif ?>
                </td>
            </tr>
            <tr>
                <td width="150px">Tanggal Berangkat</td>
                <td width="30px">:</td>
                <td>
                    <?php if ($tanggal_berangkat != '') : ?>
                        <?= date('d/m/Y', strtotime($tanggal_berangkat)) ?> sd. <?= date('d/m/Y', strtotime($sd_tanggal_berangkat)) ?>
                    <?php else : ?>
                        -
                    <?php endif ?>
                </td>
            </tr>
        </table>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kapal</th>
                    <th>Tgl Tiba</th>
                    <th>Tgl Berangkat</th>
                    <th>Tgl Input Admin</th>
                    <th>Status Dokumen</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($data as $v) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $v['nama_kapal'] ?></td>
                        <td><?= date('d/m/Y', strtotime($v['tgl_tiba'])) ?></td>
                        <td><?= date('d/m/Y', strtotime($v['tgl_berangkat'])) ?></td>
                        <td><?= date('d/m/Y', strtotime($v['tgl_input'])) ?></td>
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
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<script>
	window.load = print_d();

	function print_d() {
		window.print();

	}
</script>