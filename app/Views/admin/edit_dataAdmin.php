<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<section class="konten_admin">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Form Ubah Data Admin</h1>
                <form action="<?= site_url('dataAdmin_update/' . $data['id_data_admin']); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama_admin" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['nama_admin'] ?>" id="nama_admin" name="nama_admin" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username_admin" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['username_admin'] ?>" id="username_admin" name="username_admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_admin" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['password_admin'] ?>" id="password_admin" name="password_admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/admin/data_admin" class="btn btn-secondary">
                                Back
                            </a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(''); ?>