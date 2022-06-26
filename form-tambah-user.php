<?php 
    include "header.php";
?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Data User</h1>
        <div class="card mb-4 col-6">
            <div class="card-header">
                <i class="fas fa-user me-1"></i>
                Tambah Baru Data User
            </div>
            <div class="card-body">
                <div class="container">
                    <form action="action-form-tambah-user.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Nama Lengkap</label>
                                    <input class="form-control" name="nama_lengkap" type="text" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Username</label>
                                    <input class="form-control" name="username" type="text" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Password</label>
                                    <input class="form-control" name="password" type="password" />
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2 fw-bold">Level</label>
                                    <select name="level" id="level" class="form-control">
                                            <option value="">Pilih level user</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Operator</option>
                                            <option value="3">Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-end mt-4 mb-0">
                                    <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
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