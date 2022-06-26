<?php 
    include "header.php";

    include "koneksi.php";
    // GET DATA KAPAL
    $query = "SELECT id_kapal, nama_kapal, tgl_tiba FROM data_kapal";
    $sql = mysqli_query($koneksi, $query);

    $data = [];
    while($row = mysqli_fetch_array($sql))
    {
        $data[] = $row;
    }

    // GET NOMOR INVOICE
    $query = "SELECT nomor FROM invoice ORDER BY id_invoice DESC LIMIT 1";
    $sql = mysqli_query($koneksi, $query);
    $inv = mysqli_fetch_array($sql);
    $nomor_invoice = "";

    if ($inv['nomor'] == null) {
        $nomor_invoice = "INV-00001";
    } else {
        $number = explode("-", $inv['nomor']);
        $new = str_pad(intval($number[1]) + 1, 5, "0", STR_PAD_LEFT);
        $nomor_invoice = "INV-".$new;
    }
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Invoice Kapal</h1>
        <div class="card mb-4 col-6">
            <div class="card-header">
                <i class="fas fa-ship me-1"></i>
                Tambah Baru Data Invoice Kapal
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="action-form-tambah-invoice.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Kapal</label>
                                    <select name="id_kapal" id="id_kapal" class="form-control">
                                            <option value="">Pilih data kapal</option>
                                        <?php foreach($data as $v): ?>
                                            <option value="<?= $v['id_kapal'] ?>"><?= $v['nama_kapal'] .' ('.($v['tgl_tiba'] != null ? date('d/m/Y', strtotime($v['tgl_tiba'])) : '-').')' ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Kapal 2</label>
                                    <select name="id_kapal2" id="id_kapal2" class="form-control">
                                            <option value="">Pilih data kapal 2</option>
                                        <?php foreach($data as $v): ?>
                                            <option value="<?= $v['id_kapal'] ?>"><?= $v['nama_kapal'] .' ('.($v['tgl_tiba'] != null ? date('d/m/Y', strtotime($v['tgl_tiba'])) : '-').')' ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nomor Invoice</label>
                                    <input class="form-control" name="nomor" type="text" value="<?= $nomor_invoice ?>" readonly />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Tanggal Invoice</label>
                                    <input class="form-control" name="tanggal_invoice" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end mt-4 mb-0">
                                    <button type="submit" name="tambah" class="btn btn-primary">Lanjut</button>
                                </div>
                            </div>
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