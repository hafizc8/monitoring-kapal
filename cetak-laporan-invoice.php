<?php 
    include "koneksi.php";

    $tanggal_invoice = $_GET['tanggal_invoice'];
    $sd_tanggal_invoice = $_GET['sd_tanggal_invoice'];

    if ($tanggal_invoice != '') {
        if ($sd_tanggal_invoice == '') {
            echo "<script language=\"javascript\">alert(\"Isi sd tanggal invoice!\");history.back();</script>";
            exit;
        }
    }

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
        WHERE a.tanggal BETWEEN '$tanggal_invoice' AND '$sd_tanggal_invoice'
        GROUP BY a.id_invoice, a.nomor, a.id_kapal, a.tanggal, b.nama_kapal, b.tgl_tiba, e.nama_kapal, e.tgl_tiba
        ORDER BY id_invoice ASC
    ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Invoice</title>
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
        <h4>Laporan Data Invoice</h4>
        <table>
            <tr>
                <td width="150px">Tanggal Invoice</td>
                <td width="30px">:</td>
                <td>
                    <?php if ($tanggal_invoice != '') : ?>
                        <?= date('d/m/Y', strtotime($tanggal_invoice)) ?> sd. <?= date('d/m/Y', strtotime($sd_tanggal_invoice)) ?>
                    <?php else : ?>
                        -
                    <?php endif ?>
                </td>
            </tr>
            <tr>
                <td width="150px">Dicetak Tanggal</td>
                <td width="30px">:</td>
                <td>
                    <?= date('d/m/Y, H:i', time()) ?>
                </td>
            </tr>
        </table>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No Invoice</th>
                    <th>Kapal (Tgl Tiba)</th>
                    <th>Tgl Invoice</th>
                    <th style="text-align: right;">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php $total = 0; ?>
                <?php foreach($data as $v) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $v['nomor'] ?></td>
                        <td>
                            1. <?= ($v['nama_kapal'] ?? '-').' <b>('.($v['tgl_tiba'] != null ? date('d/m/Y', strtotime($v['tgl_tiba'])) : '-').')</b>' ?><br>
                            2. <?= $v['nama_kapal2'] == '' ? '-' : ($v['nama_kapal2'] ?? '-').' <b>('.($v['tgl_tiba2'] != null ? date('d/m/Y', strtotime($v['tgl_tiba2'])) : '-').')</b>' ?>
                        </td>
                        <td><?= date('d/m/Y', strtotime($v['tanggal'])) ?></td>
                        <td style="text-align: right;"><?= rupiah($v['jumlah']) ?></td>
                    </tr>
                    <?php $total += $v['jumlah'] ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Total</th>
                    <th style="text-align: right;"><?= rupiah($total) ?></th>
                </tr>
            </tfoot>
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