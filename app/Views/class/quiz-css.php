<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/img/logo1.png" rel="icon">
    <link rel="stylesheet" href="/css/kuis.css">
    
    <title><?= $title; ?></title>
</head>
<body>
    <div class="app">
        <h1>Quiz CSS</h1>
        <div class="quiz">
            <h2 id="question">Pertanyaan</h2>
            <div id="answer-buttons">
                <button class="btn">Answer 1</button>
                <button class="btn">Answer 2</button>
                <button class="btn">Answer 3</button>
                <button class="btn">Answer 4</button>
            </div>
            <button id="next-btn">Next</button>
            <button id="back-btn">Kembali ke Halaman Kelas</button>
        </div>
    </div>
    <script src="/js/kuis-css.js"></script>
</body>
</html>