<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <section style="background-color: #37517e;">
    </section>

    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Bootcamp</h2>
            <p>Nikmati Bootcamp yang Seru!</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="/img/logo-html.jpeg" alt="" srcset=""></div>
                        <h4><a href="/bootcamp/bc-html" class="stretched-link">HTML</a></h4>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="/img/logo-css.jpg" alt="" srcset=""></div>
                        <h4><a href="/bootcamp/bc-css" class="stretched-link">CSS</a></h4>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="/img/logo-javascript.jpg" alt="" srcset=""></div>
                        <h4><a href="/bootcamp/bc-js" class="stretched-link">JavaScript</a></h4>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="/img/logo-php.jpg" alt="" srcset=""></div>
                        <h4><a href="/bootcamp/bc-php" class="stretched-link">PHP</a></h4>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section>
</main>
<?= $this->endSection(''); ?>