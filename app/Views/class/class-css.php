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
                    <h1>CSS</h1>
                    <p class="mt-2">Pada materi ini kita akan mempelajari tentang Introduction to CSS. Lebih lanjut,
                        Kita akan belajar tentang bagaimana konsep dasar kegunaan CSS. Selanjutnya kita juga akan
                        belajar tentang CSS general syntax, bagaiamana cara menggunakan CSS serta jenis-jenis framework
                        CSS. Setelah mempelajari materi ini kita diharapkan dapat memahami dasar penggunaan CSS untuk
                        HTML.</p>
                    <hr>
                    <h3>Dalam Materi Ini</h3>
                    <p>
                        Berikut dokumen yang dapat mengasah kemampuan Anda lebih dalam dan juga Anda dapat mengerjakan
                        quiz terkait CSS dasar.
                    </p>
                    <div class="d-flex">
                        <a href="https://www.w3schools.com/css/default.asp" class="btn btn-get-started"><i
                                class='bx bx-book-bookmark'></i>Modul</a>
                        <a href="/class/quiz-CSS" class="btn btn-get-started" style="margin-left: 30px;"><i
                                class='bx bx-receipt'></i></i>Kerjakan
                            Quiz</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <iframe width="600" height="315"
                        src="https://www.youtube.com/embed/watch?v=V-DD30lGAL0&list=PL0A06OwyXeD1Gu174VUCSp0m6XgTK5xlq"
                        class="mt-3"></iframe>
                </div>
            </div>
        </div>

    </section>
</main>
<?= $this->endSection(''); ?>