<?php 
    include "header.php";

    include "koneksi.php";

    $query = "SELECT * FROM invoice_detail WHERE id_invoice = ".$_GET['id_invoice']." ORDER BY id ASC";
    $sql = mysqli_query($koneksi, $query);

    $data = [];
    while($row = mysqli_fetch_array($sql))
    {
        $data[] = $row;
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Invoice Kapal</h1>
        <div class="row">
            <div class="col-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-ship me-1"></i>
                        Tambah Baru Data Invoice Kapal
                    </div>
                    <div class="card-body">
                        <form action="action-form-tambah-detail-invoice.php?id_invoice=<?= $_GET['id_invoice'] ?>" method="POST">
                            <div class="container">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Keterangan</label>
                                    <input class="form-control" name="keterangan" type="text" placeholder="Masukkan keterangan" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Total (Rp)</label>
                                    <input class="form-control" name="total" type="text" placeholder="Masukkan total" />
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-end">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-ship me-1"></i>
                        Invoice
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th style="text-align:right">Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php $total = 0; ?>
                                    <?php foreach($data as $v) : ?>
                                        <tr>
                                            <td width="5%"><?= $no++ ?></td>
                                            <td width="70%"><?= $v['keterangan'] ?></td>
                                            <td width="25%" style="text-align:right"><?= rupiah($v['total']) ?></td>
                                            <td><a href="action-hapus-item-invoice.php?id_invoice=<?= $v['id_invoice'] ?>&id_item=<?= $v['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><span class="fa fa-trash"></span></a></td>
                                        </tr>
                                        <?php $total += $v['total'] ?>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th style="text-align:right"><?= rupiah($total) ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
    include "footer.php";
?>