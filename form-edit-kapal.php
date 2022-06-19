<?php 
    include "header.php";

    include "koneksi.php";

    $id_kapal = $_GET['id_kapal'];

    $query = mysqli_query($koneksi, "SELECT * FROM data_kapal WHERE id_kapal='$id_kapal'");
    $data = mysqli_fetch_array($query);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Kapal</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-ship me-1"></i>
                Edit Data Kapal
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="action-form-edit-kapal.php" method="POST">
                        <div class="row">
                            <input type="hidden" name="id_kapal" value="<?= $id_kapal ?>">
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Kapal</label>
                                    <input class="form-control" name="nama_kapal" type="text" value="<?= $data['nama_kapal'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Tiba</label>
                                    <input class="form-control" name="tanggal_tiba" type="date" value="<?= $data['tgl_tiba'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Diterima Tanggal</label>
                                    <input class="form-control" name="tanggal_diterima" type="date" value="<?= $data['tgl_terima'] ?>" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Bendera</label>
                                    <input class="form-control" name="bendera" type="text" value="Indonesia" readonly />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Berangkat</label>
                                    <input class="form-control" name="tanggal_berangkat" type="date" value="<?= $data['tgl_berangkat'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Diserahkan Tanggal</label>
                                    <input class="form-control" name="diserahkan_tanggal" type="date" value="<?= $data['tgl_diserahkan'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4 mb-0">
                            <button type="submit" name="update" class="btn btn-primary">Lanjut</button>
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