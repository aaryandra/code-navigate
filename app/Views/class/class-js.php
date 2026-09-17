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
                    <h1>JavaScript</h1>
                    <p class="mt-2">Pada materi ini, kita akan mempelajari cara berpikir dan penggambaran suatu program
                        baik dengan menggunakan Algorithma seperti Flowchart dan Pseudocode.<br><br>

                        Kita akan belajar konsep dasar Javascript, Variable, dan Scope tiap-tiap variablenya. Kita juga
                        akan lebih siap dalam memasuki dunia javascript ketika kita selesai mempelajari materi ini.</p>
                    <hr>
                    <h3>Dalam Materi Ini</h3>
                    <p>
                        Berikut dokumen yang dapat mengasah kemampuan Anda lebih dalam dan juga Anda dapat mengerjakan
                        quiz terkait JavaScript dasar.
                    </p>
                    <div class="d-flex">
                        <a href="https://www.w3schools.com/js/default.asp" class="btn btn-get-started"><i
                                class='bx bx-book-bookmark'></i>Modul</a>
                        <a href="/class/quiz-JavaScript" class="btn btn-get-started" style="margin-left: 30px;"><i
                                class='bx bx-receipt'></i></i>Kerjakan
                            Quiz</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <iframe width="600" height="315"
                        src="https://www.youtube.com/embed/watch?v=SDROba_M42g&list=PL-CtdCApEFH8SS0Gsj9_a0cC0jypFEoSg"
                        class="mt-3"></iframe>
                </div>
            </div>
        </div>

    </section>
</main>
<?= $this->endSection(''); ?>