<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body class="index-page">
    <input type="hidden" name="user_id" value="<?= session()->get('user_id') ?>">
    <main>
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Be an Expert Programmer
                            Together with Code Navigate</h1>
                        <p class="">Start Directed Learning with a fun experience!</p>
                        <div class="d-flex">
                            <a href="/class" class="btn-get-started">Mulai Belajar</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2 class="">Tentang Kami</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col" data-aos="fade-up" data-aos-delay="200">
                        <h2>Code Navigate</h2>
                        <p>Sistem Informasi Code Navigate adalah sebuah platform digital yang dirancang untuk mendukung
                            proses pembelajaran dan pengajaran secara elektronik atau online. Code Navigate menyediakan
                            akses ke materi pembelajaran, interaksi antara peserta didik dan pengajar, serta evaluasi
                            dan pengelolaan hasil pembelajaran. </p>
                        <!-- <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a> -->
                    </div>

                </div>

            </div>

        </section>

        <section id="why-us" class="section why-us" data-builder="section">

            <div class="container-fluid">

                <div class="row gy-4">

                    <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                        <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                            <h3 class=""><strong>Berbagai Program Code Navigate!</strong></h3>
                        </div>

                        <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                            <div class="faq-item faq-active">

                                <h3><span>E-Learning</span></h3>
                                <div class="faq-content">
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Belajar fleksibel
                                        via Video Materi, Bahan Bacaan, Project dan Studi Kasus.</p>
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Praktikal &
                                        Actionable. Bertahap dari level Dasar hingga Lanjut.</p>
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Grup Komunitas
                                        Diskusi Lifetime. Kelas Gratis Tiap Bulannya.</p>
                                </div>
                            </div><!-- End Faq item-->

                            <div class="faq-item faq-active">

                                <h3><span>Bootcamp</span></h3>
                                <div class="faq-content">
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Free Intensive Live
                                        Class, Praktikal & Mendalam.</p>
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Kombinasi Case
                                        Study, Diskusi dan Praktik di Tiap Sesi. Basic to Advanced.</p>
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Group Mentoring
                                        Semi-Privat untuk Bangun Portfolio.</p>
                                    <p><span><i class='bx bx-check' style='color:#26ee09'></i></span>Tutor yang Expert
                                        dalam Bidangnya.</p>
                                </div>
                            </div><!-- End Faq item-->

                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                        <img src="/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>
                </div>

            </div>

        </section>

        <!-- <section id="call-to-action" class="call-to-action section">

            <img src="/img/cta-bg.jpg" alt="">

            <div class="container">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-9 text-center text-xl-start">
                        <h3>Call To Action</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xl-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>

            </div>

        </section> -->

        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Perancang</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="/img/foto-profile.jpg" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Arya Andra Mirza</h4>
                                <span>Mahasiswa D-III Teknologi Informasi Universitas Brawijaya</span>
                                <div class="social">
                                    <a href="https://api.whatsapp.com/send?phone=6282242642870"><i
                                            class='bx bxl-whatsapp'></i></a>
                                    <a href="https://www.instagram.com/aarryandra/"><i class='bx bxl-instagram'></i></a>
                                    <a href="https://www.linkedin.com/in/arya-andra-255187250/"><i
                                            class='bx bxl-linkedin'></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section>

        </section>

        <?php if (!($premium_user)): ?>
            <section id="pricing" class="pricing section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Berlangganan</h2>
                    <p>Dapatkan Lebih Banyak Keuntungan!</p>
                </div><!-- End Section Title -->

                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pricing-item featured">
                                <h3>Premium</h3>
                                <h4><sup>Rp</sup>25.000<span> / bulan</span></h4>
                                <ul>
                                    <li><i class='bx bx-check-circle'></i></i> <span>Akses fitur menarik lainnya</span></li>
                                    <li><i class='bx bx-check-circle'></i></i> <span>Dapatkan diskon Bootcamp</span></li>
                                    <li><i class='bx bx-check-circle'></i></i> <span>Grup Komunitas</span></li>
                                </ul>
                                <button class="buy-btn" id="pay-button">Buy Now</button>
                            </div>
                        </div><!-- End Pricing Item -->
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-DwuDNwxhWwIaV348"></script>
    <script type="text/javascript">
        const userId = document.querySelector('input[name="user_id"]').value;

        document.getElementById('pay-button').onclick = function () {
            // SnapToken acquired from previous step
            snap.pay('<?= $snapToken ?>', {
                // Optional
                onSuccess: async function (result) {
                    console.log('onSuccess', result);

                    /* You may add your own js here, this is just example */
                    const updateStatus = await fetch(`/payment/success-payment/${userId}`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(result),
                    });

                    const response = await updateStatus.json();

                    if (response.status) {
                        alert('Pembayaran Berhasil');
                        // window.location.href = '/home';
                    } else {
                        alert('Pembayaran Gagal');
                    }
                },
                // Optional
                onPending: function (result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function (result) {
                    console.log('onError', result);
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
    <?= $this->endSection(''); ?>