<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<section class="konten_admin">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Data Admin</h1>
                <?php if (session()->getFlashdata('pesan')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <a href="/admin/create_dataAdmin" class="btn btn-primary mb-2">
                    <i class='bx bx-user-plus' style="font-size: 20px; vertical-align: middle;"></i>
                    Add New</a>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Admin</th>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($dataadmin as $da): ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $da['nama_admin']; ?></td>
                                <td><?= $da['username_admin']; ?></td>
                                <td><?= $da['password_admin']; ?></td>
                                <td>
                                    <!-- ========= Button Edit ========= -->
                                    <button type="button" class="btn btn-success">
                                        <a href="<?= '/admin/edit_dataAdmin/' . $da['id_data_admin']; ?>" class="text-white">Edit</a>
                                    </button>

                                    <!-- ========= Button Delete ========= -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#deleteModal<?= $da['id_data_admin']; ?>">
                                        Delete
                                    </button>
                                    <div class="modal fade" id="deleteModal<?= $da['id_data_admin']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Delete Data Admin</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete? If you
                                                    delete, it will be permanently lost.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancel
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <a href="<?= site_url('dataAdmin_delete/' . $da['id_data_admin']) ?>" class="text-white">Delete</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(''); ?>