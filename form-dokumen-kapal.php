<?php 
    include "header.php";
    include "koneksi.php";

    $id_kapal = $_GET['id_kapal'];

    $query = mysqli_query($koneksi, "SELECT * FROM data_kapal WHERE id_kapal='$id_kapal'");
    $data = mysqli_fetch_array($query);

    $data_form = [
        [
            'id' => 'spb',
            'title' => 'Surat Persetujuan Berlayar (SPB)'
        ],
        [
            'id' => 'manifest',
            'title' => 'Manifest / Bill Of Ladding'
        ],
        [
            'id' => 'crewlist',
            'title' => 'Crewlist'
        ],
        [
            'id' => 'buku_kesehatan',
            'title' => 'Buku Kesehatan'
        ],
        [
            'id' => 'buku_pelaut',
            'title' => 'Buku Pelaut'
        ],
        [
            'id' => 'ijazah_perwira',
            'title' => 'Ijazah Perwira, Endorsement'
        ],
        [
            'id' => 'bst',
            'title' => 'BST'
        ],
        [
            'id' => 'pasport',
            'title' => 'Pasport'
        ],
        [
            'id' => 'surat_laut',
            'title' => 'Surat Laut / Pas Besar'
        ],
        [
            'id' => 'surat_ukur',
            'title' => 'Surat Ukur'
        ],
        [
            'id' => 'serti_konstruksi',
            'title' => 'Sertifikat Keselamatan Konstruksi'
        ],
        [
            'id' => 'serti_perlengkapan_barang',
            'title' => 'Sertifikat Keselamatan Perlengkapan Kapal Barang'
        ],
        [
            'id' => 'serti_radio',
            'title' => 'Sertifikat Keselamatan Radio'
        ],
        [
            'id' => 'serti_lambung',
            'title' => 'Sertifikat Klasifikasi Lambung - BKI'
        ],
        [
            'id' => 'serti_mesin',
            'title' => 'Sertifikat Klasifikasi Mesin - BKI'
        ],
        [
            'id' => 'serti_garis_muat',
            'title' => 'Sertifikat Klasifikasi Garis Muat (Load Line) - BKI'
        ],
        [
            'id' => 'serti_pencemaran',
            'title' => 'Sertifikat Nasional Pencegahan Pencemaran Dari Kapal (SNPP)'
        ],
        [
            'id' => 'minimum_safe_manning',
            'title' => 'Minimum Safe Manning Certificate'
        ],
        [
            'id' => 'serti_anti_teritip',
            'title' => 'Sertifikat Nasional Anti Teritip (Anti Fouling System)'
        ],
        [
            'id' => 'serti_liferaft',
            'title' => 'Sertifikat Pemeriksaan LifeRaft (ILR)'
        ],
        [
            'id' => 'serti_damkar',
            'title' => 'Sertifikat Pemeriksaan Pemadam Kebakaran (PMK)'
        ],
        [
            'id' => 'hru',
            'title' => 'Hydrostatic Release Unit (HRU)'
        ],
        [
            'id' => 'doc',
            'title' => 'Document Of Compiance (DOC)'
        ],
        [
            'id' => 'serti_keselamatan_sementara',
            'title' => 'Safety Management Certificate (Sertifikat Manajemen Keselamatan Sementara)'
        ],
        [
            'id' => 'rpt',
            'title' => 'RPT'
        ],
        [
            'id' => 'buku_sijil',
            'title' => 'Buku Sijil'
        ],
        [
            'id' => 'pkl',
            'title' => 'PKL'
        ],
        [
            'id' => 'sscec',
            'title' => 'SSCEC / Derrating'
        ],
        [
            'id' => 'wreak',
            'title' => 'Wreack & Removal'
        ],
        [
            'id' => 'clc',
            'title' => 'CLC / CLB'
        ],
        [
            'id' => 'orb',
            'title' => 'Oil Record Book (ORB)'
        ],
        [
            'id' => 'izin_stasiun_radio',
            'title' => 'Izin Stasiun Radio Kapal Laut'
        ],
        [
            'id' => 'serti_asuransi_kapal',
            'title' => 'Sertifikat Asuransi Kapal'
        ],
        [
            'id' => 'siupal',
            'title' => 'SIUPAL'
        ],
        [
            'id' => 'sk_susunan_perwira',
            'title' => 'Surat Keterangan Susunan Perwira'
        ],
        [
            'id' => 'stempel_kapal',
            'title' => 'Stempel Kapal'
        ],
    ];
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Kapal</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-ship me-1"></i>
                Dokumen Kapal <b><?= $data['nama_kapal'] ?></b>
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="" method="POST">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Dokumen</th>
                                    <th>Checklist</th>
                                    <th>Upload</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach($data_form as $v): ?>
                                    <?php $id = $v['id']; ?>
                                    <tr>
                                        <td class="text-center"><?= $i++ ?></td>
                                        <td><?= $v['title'] ?></td>
                                        <td class="text-center" id="checklist_<?= $id ?>">
                                            <?php if ($data[$id] != null) : ?>
                                                <i class="fa-solid fa-circle-check fa-xl text-success"></i>
                                            <?php else : ?>
                                                <i class="fa-solid fa-circle-xmark fa-xl"></i>
                                            <?php endif ?>
                                        </td>
                                        <td>
                                            <?php if ($data[$id] != null) : ?>
                                                <span>nama file: <?= $data[$id] ?></span>
                                                <br>
                                                
                                                <?php $ext = pathinfo($data[$id], PATHINFO_EXTENSION); ?>
                                                <?php if (in_array($ext, ['png', 'jpg', 'jpeg'])) : ?>
                                                    <img src="upload/<?= $data[$id] ?>" width="200px">
                                                <?php else : ?>
                                                    <iframe src="upload/<?= $data[$id] ?>" frameborder="0" width="200px"></iframe>
                                                <?php endif ?>
                                            <?php endif ?>
                                            <b id="success_<?= $id ?>" class="text-success" style="display: none;"><i class="fa-solid fa-circle-check fa-xl"></i> Berhasil upload</b>
                                            <input type="file" name="<?= $id ?>" id="<?= $id ?>">
                                            <b id="loading_<?= $id ?>" style="display: none;"><img src="assets/loading.gif" width="40px"> Proses upload ..</b>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-4 mb-0">
                            <a href="index.php" class="btn btn-primary">Selesai</a>
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

<script src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("input:file").change(function (event){
            let idInput = event.target.id;

            // show loading
            $('#loading_' + idInput).css('display', 'block');
            $('#'+ idInput).css('display', 'none');

            let fd = new FormData();
            let files = $(this)[0].files[0];
            let size = $(this)[0].size;
            fd.append('file', files);
            fd.append('id_file', idInput);

            if (files.size > 8000000) {
                alert("ukuran file tidak boleh lebih dari 8 mb");
                $('#loading_' + idInput).css('display', 'none');
                $('#'+ idInput).css('display', 'block');
                $('#'+ idInput).val('');
                return;
            }
    
            $.ajax({
                url: 'action-upload-dokumen-kapal.php?id_kapal=' + <?= $_GET['id_kapal'] ?>,
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response){
                    if(response != 0){
                        // hide loading on success
                        setTimeout(function()
                        {
                            $('#loading_' + idInput).css('display', 'none');
                            $('#'+ idInput).css('display', 'block');
                            $('#success_' + idInput).css('display', 'block');
                            $('#checklist_' + idInput).html('<i class="fa-solid fa-circle-check fa-xl text-success"></i>');
                        }, 2000);

                        setTimeout(function() {
                            $('#success_' + idInput).css('display', 'none');
                        }, 10000);
                    }
                    else{
                        alert('Gagal mengupload file, silahkan coba beberapa saat lagi!');
                        $('#loading_' + idInput).css('display', 'none');
                        $('#'+ idInput).css('display', 'block');
                        $('#checklist_' + idInput).html('<i class="fa-solid fa-circle-xmark fa-xl"></i>');
                    }
                },
            });
        });
    });
</script>