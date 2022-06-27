<?php 
    include 'header.php';
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Laporan Data Invoice</h1>
        <div class="card mb-4 col-8">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Laporan Data Invoice
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="cetak-laporan-invoice.php" method="GET">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Invoice</label>
                                    <input class="form-control" name="tanggal_invoice" type="date" />
                                </div>
                            </div>
                            <div class="col-6"><div class="mb-4">
                                    <label class="mb-2 fw-bold">sd Tanggal</label>
                                    <input class="form-control" name="sd_tanggal_invoice" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4 mb-0">
                            <button type="submit" name="tambah" class="btn btn-primary">Cetak</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer.php';
?>