const questions = [
    {
        question: "PHP adalah singkatan dari...",
        answers : [
            { text: "Private Home Page", correct: false},
            { text: "Personal Hypertext Processor", correct: false},
            { text: "Hypertext Processor", correct: true},
            { text: "Program Hypertext Processor", correct: false},
        ]
    },
    {
        question: "Tiap variabel pada PHP diawali dengan simbol...",
        answers : [
            { text: ":", correct: false},
            { text: "*", correct: false},
            { text: ";", correct: true},
            { text: "&", correct: false},
        ]
    },
    {
        question: "Berikut adalah yang bukan contoh operator aritmatika...",
        answers : [
            { text: "+", correct: false},
            { text: "%", correct: false},
            { text: "/", correct: false},
            { text: ">=", correct: true},
        ]
    },
    {
        question: "Di bawah ini adalah yang bukan merupakan struktur perulangan pada PHP...",
        answers : [
            { text: "Switch", correct: true},
            { text: "For", correct: false},
            { text: "Foreach", correct: false},
            { text: "While", correct: false},
        ]
    },
    {
        question: "Dibawah ini sintak yang cocok untuk mengeluarkan output 'Hello Everyone' di PHP adalah...",
        answers : [
            { text: "echo 'Hello Everyone';", correct: true},
            { text: "cout<<'Hello Everyday';", correct: false},
            { text: "System.out.print('Hello Everyone');", correct: false},
            { text: "cin>>'Hello Eves';", correct: false},
        ]
    },
    {
        question: "Operator pembanding dipakai untuk melakukan...",
        answers : [
            { text: "Penjumlahan antara dua nilai", correct: false},
            { text: "Mengombinasikan antara dua nilai", correct: false},
            { text: "Perbandingan antara dua nilai", correct: true},
            { text: "Semua jawaban salah", correct: false},
        ]
    },
    {
        question: "Tipe data integer pada PHP dipakai untuk data...",
        answers : [
            { text: "Bilangan bulat", correct: false},
            { text: "Bilangan pecahan", correct: true},
            { text: "Boolean", correct: false},
            { text: "NULL", correct: false},
        ]
    },
    {
        question: "Operator aritmatika dipakai untuk menjalankan operasi...",
        answers : [
            { text: "Aritmatika", correct: true},
            { text: "Pembanding", correct: false},
            { text: "Relasi", correct: false},
            { text: "Assignment", correct: false},
        ]
    },
    {
        question: "Fungsi variabel session adalah...",
        answers : [
            { text: "Menjalankan autentikasi dari user", correct: false},
            { text: "Menyimpan data dari tipe data", correct: false},
            { text: "Menyimpan informasi sementara di server", correct: true},
            { text: "Membuat validasi variabel", correct: false},
        ]
    },
    {
        question: "Indeks array di PHP dimulai dari...",
        answers : [
            { text: "1", correct: false},
            { text: "0", correct: true},
            { text: "3", correct: false},
            { text: "Tak Terhingga", correct: false},
        ]
    }
];

const questionElement = document.getElementById("question");
const answerButtons = document.getElementById("answer-buttons");
const nextButton = document.getElementById("next-btn");
const backButton = document.getElementById("back-btn");

let currentQuestionIndex = 0;
let score = 0;

function startQuiz(){
    currentQuestionIndex = 0;
    score = 0;
    nextButton.innerHTML = "Next";
    showQuestion();
}

function showQuestion(){
    resetState();
    let currentQuestion = questions[currentQuestionIndex];
    let questionNo = currentQuestionIndex + 1;
    questionElement.innerHTML = questionNo + ". " + currentQuestion.question;

    currentQuestion.answers.forEach(answer => {
        const button = document.createElement("button");
        button.innerHTML = answer.text;
        button.classList.add("btn");
        answerButtons.appendChild(button);
        if(answer.correct){
            button.dataset.correct = answer.correct;
        }
        button.addEventListener("click", selectAnswer);
    })
}

function resetState(){
    backButton.style.display = "none";
    nextButton.style.display = "none";
    while(answerButtons.firstChild){
        answerButtons.removeChild(answerButtons.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const isCorrect = selectedBtn.dataset.correct === "true";
    if(isCorrect){
        selectedBtn.classList.add("correct");
        score++;
    }else {
        selectedBtn.classList.add("incorrect");
    }
    Array.from(answerButtons.children).forEach(button => {
        if(button.dataset.correct === "true"){
            button.classList.add("correct");
        }
        button.disabled = true;
    });
    nextButton.style.display = "block";
}

function showScore(){
    resetState();
    questionElement.innerHTML = `Nilai Kamu Adalah ${score} dari ${questions.length}`;
    nextButton.innerHTML = "Ulangi Kuis";
    nextButton.style.display = "block";
}

function handleNextButton(){
    currentQuestionIndex++;
    if(currentQuestionIndex < questions.length){
        showQuestion();
    } else {
        showScore();
        backButton.innerHTML = "Kembali Ke Kelas";
        backButton.style.display = "block";
    }
}

nextButton.addEventListener("click", () => {
    if(currentQuestionIndex < questions.length){
        handleNextButton();
    } else {
        startQuiz();
    }
})

backButton.addEventListener("click", () => {
    window.location.href = "/class/class-php";
})

startQuiz();