<?php 
    include "header.php";
    include "koneksi.php";

    $id_user = $_GET['id_user'];
    $sql = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id_user'");
    $data = mysqli_fetch_array($sql);
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data User</h1>
        <div class="card mb-4 col-6">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Update Data User
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="action-form-edit-user.php" method="POST">
                        <input type="hidden" name="id_user" value="<?= $_GET['id_user'] ?>">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Lengkap</label>
                                    <input class="form-control" name="nama_lengkap" type="text" value="<?= $data['nama_lengkap'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Username</label>
                                    <input class="form-control" name="username" type="text" value="<?= $data['username'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Password</label>
                                    <input class="form-control" name="password" type="password" value="<?= $data['password'] ?>" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Level</label>
                                    <select name="level" id="level" class="form-control">
                                        <option value="">Pilih level user</option>
                                        <option value="1" <?= $data['level'] == '1' ? 'selected' : '' ?>>Administrator</option>
                                        <option value="2" <?= $data['level'] == '2' ? 'selected' : '' ?>>Operator</option>
                                        <option value="3" <?= $data['level'] == '3' ? 'selected' : '' ?>>Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end mt-4 mb-0">
                                    <button type="submit" name="update" class="btn btn-primary">Ubah</button>
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