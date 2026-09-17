<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<section class="konten_admin">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Form Ubah Data Admin</h1>
                <form action="<?= site_url('dataUser_update/' . $data['id_data_user']); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="nama_user" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['nama_user'] ?>" id="nama_user" name="nama_user" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username_user" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['username_user'] ?>" id="username_user" name="username_user">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password_user" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['password_user'] ?>" id="password_user" name="password_user">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email_user" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $data['email_user'] ?>" id="email_user" name="email_user">
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