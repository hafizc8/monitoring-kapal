<?php 
    session_start();
    if (!isset($_SESSION['nama_lengkap'])) {
        echo "<script language=\"javascript\">alert(\"Silahkan login terlebih dahulu!\");document.location.href='login.php';</script>";
    }

    include "koneksi.php";

    $query = "SELECT * FROM users";
    $sql = mysqli_query($koneksi, $query);

    $data = [];
    while($row = mysqli_fetch_array($sql))
    {
        $data[] = $row;
    }
?>
<?php 
    include 'header.php';
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data Akun</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Data Akun
            </div>
            <div class="card-body">
                <a href="form-tambah-user.php" class="btn btn-primary mb-3">Tambah Baru</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data as $v): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $v['nama_lengkap'] ?></td>
                                <td><?= $v['username'] ?></td>
                                <td>
                                    <?php if ($v['level'] == '1') : ?>
                                        <span class="badge bg-success">Admin</span>
                                    <?php elseif ($v['level'] == '2') : ?>
                                        <span class="badge bg-primary">Operator</span>
                                    <?php else  : ?>
                                        <span class="badge bg-primary">Manager</span>
                                    <?php endif ?>
                                </td>
                                <td class="text-center">
                                    <a href="form-edit-user.php?id_user=<?= $v['id'] ?>" class="btn btn-sm btn-primary">Ubah</a>
                                    <a href="action-hapus-user.php?id_user=<?= $v['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php 
    include 'footer.php';
?>