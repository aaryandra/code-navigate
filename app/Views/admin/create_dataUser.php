<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<section class="konten_admin">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="text-align: center;">Form Tambah Data User</h1>
                <form action="<?= site_url('dataUser_save'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="namaUser" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namaUser" name="namaUser" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="usernameUser" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="usernameUser" name="usernameUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passwordUser" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passwordUser" name="passwordUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailUser" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="emailUser" name="emailUser">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a href="/admin/data_user" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(''); ?>