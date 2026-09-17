<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <section id="hero1" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <div class="d-flex">
                        <a href="/class" class="btn-get-started mb-3"><i class='bx bxs-left-arrow'
                                style="vertical-align: middle;"></i></a>
                    </div>
                    <h1>PHP</h1>
                    <p class="mt-2">Pada materi ini, kita akan fokus pada pengenalan awal mengenai PHP. Selain itu,
                        kita juga akan mempelajari prasyarat PHP, alasan penggunaan PHP, dan PHP ecosystem.</p>
                    <hr>
                    <h3>Dalam Materi Ini</h3>
                    <p>
                        Berikut dokumen yang dapat mengasah kemampuan Anda lebih dalam dan juga Anda dapat mengerjakan
                        quiz terkait PHP dasar.
                    </p>
                    <div class="d-flex">
                        <a href="https://www.w3schools.com/php/default.asp" class="btn btn-get-started"><i
                                class='bx bx-book-bookmark'></i>Modul</a>
                        <a href="/class/quiz-PHP" class="btn btn-get-started" style="margin-left: 30px;"><i
                                class='bx bx-receipt'></i></i>Kerjakan
                            Quiz</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <iframe width="600" height="315"
                        src="https://www.youtube.com/embed/watch?v=TaBWhb5SPfc&list=PL-CtdCApEFH9EmZy4zYfW1ATIJ-qMXxGt"
                        class="mt-3"></iframe>
                </div>
            </div>
        </div>

    </section>
</main>
<?= $this->endSection(''); ?>