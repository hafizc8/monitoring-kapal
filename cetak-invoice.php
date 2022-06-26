<?php 
    include "koneksi.php";

    $query = "
        SELECT 
            a.*, 
            b.nama_kapal,
            b.tgl_tiba,
            e.nama_kapal as nama_kapal2,
            e.tgl_tiba as tgl_tiba2
        FROM invoice AS a 
        LEFT JOIN data_kapal AS b ON a.id_kapal = b.id_kapal
        LEFT JOIN data_kapal AS e ON a.id_kapal2 = e.id_kapal
        WHERE a.id_invoice = ".$_GET['id_invoice']."
    ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);

    // get invoice detail
    $query2 = "SELECT * FROM invoice_detail WHERE id_invoice = ".$_GET['id_invoice']." ORDER BY id ASC";
    $sql2 = mysqli_query($koneksi, $query2);
    $detail = mysqli_fetch_all($sql2, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Invoice</title>
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
    <div class="container mt-5">
        <b>
            <img src="assets/img/logo-company.png" width="50px">
            PT. Pelayaran Laksita Aditya Parama
        </b>
        <hr>
        <h4>Invoice Kapal</h4>
        <table>
            <tr>
                <td width="150px">Nomor</td>
                <td width="30px">:</td>
                <td><?= $data['nomor'] ?></td>
            </tr>
            <tr>
                <td width="150px">Tanggal</td>
                <td width="30px">:</td>
                <td><?= date('d/m/Y', strtotime($data['tanggal'])) ?></td>
            </tr>
            <tr>
                <td width="150px">Nama Kapal</td>
                <td width="30px">:</td>
                <td><?= ($data['nama_kapal'] ?? '-').' <b>('.($data['tgl_tiba'] != null ? date('d/m/Y', strtotime($data['tgl_tiba'])) : '-').')</b>' ?></td>
            </tr>
            <tr>
                <td width="150px">Nama Kapal 2</td>
                <td width="30px">:</td>
                <td><?= ($data['nama_kapal2'] ?? '-').' <b>('.($data['tgl_tiba2'] != null ? date('d/m/Y', strtotime($data['tgl_tiba2'])) : '-').')</b>' ?></td>
            </tr>
        </table>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Keterangan</th>
                    <th style="text-align: right">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php $total = 0; ?>
                <?php foreach($detail as $v) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $v['keterangan'] ?></td>
                        <td style="text-align: right"><?= rupiah($v['total']) ?></td>
                    </tr>
                    <?php $total += $v['total'] ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <th style="text-align: right"><?= rupiah($total) ?></th>
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