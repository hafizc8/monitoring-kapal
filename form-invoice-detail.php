<?php 
    include "header.php";

    include "koneksi.php";
    
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
                        <div class="container">
                            <div class="mb-4">
                                <label class="mb-2 fw-bold">Keterangan</label>
                                <input class="form-control" name="keterangan" type="text" placeholder="Masukkan keterangan" />
                            </div>
                            <div class="mb-4">
                                <label class="mb-2 fw-bold">Total (Rp)</label>
                                <input class="form-control" name="total" type="text" placeholder="Masukkan total" />
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Tambah</button>
                        </div>
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
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Cleaning Badan Kapal</td>
                                        <td>Rp 1.300.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Cleaning Badan Kapal</td>
                                        <td>Rp 1.300.000</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Cleaning Badan Kapal</td>
                                        <td>Rp 1.300.000</td>
                                    </tr>
                                </tbody>
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