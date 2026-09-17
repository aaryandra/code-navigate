<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<section class="konten_admin">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Form Tambah Data Admin</h1>
                <form action="<?= site_url('dataAdmin_save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="namaAdmin" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaAdmin" name="namaAdmin" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usernameAdmin" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="usernameAdmin" name="usernameAdmin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordAdmin" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passwordAdmin" name="passwordAdmin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/admin/data_admin" class="btn btn-secondary">
                                Back
                            </a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(''); ?>