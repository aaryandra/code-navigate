<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="d-flex">
                        <a href="/bootcamp" class="btn-get-started mb-3"><i class='bx bxs-left-arrow'
                                style="vertical-align: middle;"></i></a>
                    </div>
                    <h1>Bootcamp HTML</h1>
                    <p><i class='bx bx-check' style='color:#26ee09'></i>Free Intensive Live
                        Class, Praktikal & Mendalam.<br>
                        <i class='bx bx-check' style='color:#26ee09'></i>Kombinasi Case
                        Study, Diskusi dan Praktik di Tiap Sesi. Basic to Advanced.<br>
                        <i class='bx bx-check' style='color:#26ee09'></i>Group Mentoring
                        Semi-Privat untuk Bangun Portfolio.<br>
                        <i class='bx bx-check' style='color:#26ee09'></i>Tutor yang Expert
                        dalam Bidangnya.
                    </p>
                    <div class="d-flex">
                        <a href="https://chat.whatsapp.com/ISE1jgkZiMS8WY8nymOwMK" target="_blank"
                            class="btn btn-get-started">Ikuti Bootcamp!</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="/img/logo-javascript.jpg" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(''); ?>