<?php 
    include "header.php";
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Kapal</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-ship me-1"></i>
                Tambah Baru Data Kapal
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="action-form-tambah-kapal.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Kapal</label>
                                    <input class="form-control" name="nama_kapal" type="text" placeholder="Masukkan nama kapal" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Tiba</label>
                                    <input class="form-control" name="tanggal_tiba" type="date" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Diterima Tanggal</label>
                                    <input class="form-control" name="tanggal_diterima" type="date" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Bendera</label>
                                    <input class="form-control" name="bendera" type="text" value="Indonesia" readonly />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Berangkat</label>
                                    <input class="form-control" name="tanggal_berangkat" type="date" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Diserahkan Tanggal</label>
                                    <input class="form-control" name="diserahkan_tanggal" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4 mb-0">
                            <button type="submit" name="tambah" class="btn btn-primary">Lanjut</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php 
    include "footer.php";
?>