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
                    <form action="" method="POST">
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
                                    <input class="form-control" name="tanggal_tiba" type="date" />
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
                        <hr>
                        <br>
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
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Surat Persetujuan Berlayar (SPB)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Manifest / Bill Of Ladding</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Crewlist</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Buku Kesehatan</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>Buku Pelaut</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>Ijazah Perwira, Endorsement</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>BST</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td>Pasport</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td>Surat Laut / Pas Besar</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td>Surat Ukur</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">11</td>
                                    <td>Sertifikat Keselamatan Konstruksi</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">12</td>
                                    <td>Sertifikat Keselamatan Perlengkapan Kapal Barang</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">13</td>
                                    <td>Sertifikat Keselamatan Radio</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">14</td>
                                    <td>Sertifikat Klasifikasi Lambung - BKI</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">15</td>
                                    <td>Sertifikat Klasifikasi Mesin - BKI</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">16</td>
                                    <td>Sertifikat Klasifikasi Garis Muat (Load Line) - BKI</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">17</td>
                                    <td>Sertifikat Nasional Pencegahan Pencemaran Dari Kapal (SNPP)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">18</td>
                                    <td>Minimum Safe Manning Certificate</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">19</td>
                                    <td>Sertifikat Nasional Anti Teritip (Anti Fouling System)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">20</td>
                                    <td>Sertifikat Pemeriksaan LifeRaft (ILR)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">21</td>
                                    <td>Sertifikat Pemeriksaan Pemadam Kebakaran (PMK)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">22</td>
                                    <td>Hydrostatic Release Unit (HRU)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">23</td>
                                    <td>Document Of Compiance (DOC)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">24</td>
                                    <td>Safety Management Certificate (Sertifikat Manajemen Keselamatan Sementara)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">25</td>
                                    <td>RPT</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">26</td>
                                    <td>Buku Sijil</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">27</td>
                                    <td>PKL</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">28</td>
                                    <td>SSCEC / Derrating</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">29</td>
                                    <td>Wreack & Removal</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">30</td>
                                    <td>CLC / CLB</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">31</td>
                                    <td>Oil Record Book (ORB)</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">32</td>
                                    <td>Izin Stasiun Radio Kapal Laut</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">33</td>
                                    <td>Sertifikat Asuransi Kapal</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">34</td>
                                    <td>SIUPAL</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">35</td>
                                    <td>Surat Keterangan Susunan Perwira</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">36</td>
                                    <td>Stempel Kapal</td>
                                    <td class="text-center"><input type="checkbox" name="spb"></td>
                                    <td><input type="file" name="spb_file" id="spb_file"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-4 mb-0">
                            <button type="submit" name="login" class="btn btn-primary">Tambah</a>
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