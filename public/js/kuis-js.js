const questions = [
    {
        question: "Di bawah ini merupakan tag javascript yang dapat disisipkan pada dokumen HTML",
        answers : [
            { text: "tag js", correct: false},
            { text: "tag javascript", correct: false},
            { text: "tag script", correct: true},
            { text: "tag jquery", correct: false},
        ]
    },
    {
        question: "Di bawah adalah sintak javascript untuk mengambil elemen HTML secara spesifik pada atribut ID",
        answers : [
            { text: "document.getElementById(“demo”);", correct: false},
            { text: "document.getElementByName(“demo”);", correct: true},
            { text: "document.getElementsByClassName(“demo”);", correct: false},
            { text: "document.getElementsByTagName(“demo”);", correct: false},
        ]
    },
    {
        question: "Kita dapat menambahkan sintak javascript dalam dokumen HTML pada bagian...",
        answers : [
            { text: "di dalam tag head", correct: false},
            { text: "di dalam tag body", correct: false},
            { text: "Bisa di dalam tag head maupun body", correct: true},
            { text: "Tidak bisa keduanya", correct: false},
        ]
    },
    {
        question: "Berikut adalah sintak yang benar untuk mengambil referensi file javascript demo.js secara eksternal",
        answers : [
            { text: "tag script src=“demo.js”", correct: true},
            { text: "tag script name=“demo.js”", correct: false},
            { text: "tag script href=“demo.js”", correct: false},
            { text: "tag script id=“demo.js”", correct: false},
        ]
    },
    {
        question: "Berikut sintak yang benar untuk menulis kalimat Hello World",
        answers : [
            { text: "document.line(“Hello Wordl”)", correct: false},
            { text: "document.show(“Hello Wordl”)", correct: false},
            { text: "document.alert(“Hello Wordl”)", correct: false},
            { text: "document.write(“Hello Wordl”)", correct: true},
        ]
    },
    {
        question: "Bagaimana membuat komentar di javascript bila lebih dari satu baris kode",
        answers : [
            { text: "!Komentar lebih dari satu baris!", correct: false},
            { text: "//Komentar lebih dari satu baris// ", correct: false},
            { text: "/Komentar lebih dari satu baris/", correct: false},
            { text: " /*Komentar lebih dari satu baris*/ ", correct: true},
        ]
    },
    {
        question: "Javascript memiliki beberapa tipe data seperti berikut, kecuali;",
        answers : [
            { text: "numerik", correct: false},
            { text: "list", correct: true},
            { text: "string", correct: false},
            { text: "bolean", correct: false},
        ]
    },
    {
        question: "Berikut adalah cara pembuatan array yang benar di javascript",
        answers : [
            { text: "mahasiswa = ['Rini','Aldi','Acep','Putra']", correct: true},
            { text: "mahasiswa = {'Rini','Aldi','Acep','Putra'}", correct: false},
            { text: "mahasiswa = ('Rini','Aldi','Acep','Putra');", correct: false},
            { text: "mahasiswa = 'Rini','Aldi','Acep','Putra'", correct: false},
        ]
    },
    {
        question: "Di bawah ini adalah contoh operarot logika, kecuali",
        answers : [
            { text: "||", correct: false},
            { text: "++", correct: true},
            { text: "&&", correct: false},
            { text: "!", correct: false},
        ]
    },
    {
        question: "Berikut ini dalah contoh event yang sering digunakan, KECUALI",
        answers : [
            { text: "onload", correct: false},
            { text: "onclick", correct: false},
            { text: "onchange", correct: false},
            { text: "ontime", correct: true},
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
    window.location.href = "/class/class-js";
})

startQuiz();