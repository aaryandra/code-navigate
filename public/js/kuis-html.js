const questions = [
    {
        question: "Kepanjangan dari HTML adalah …",
        answers : [
            { text: "HyperText Markup Language", correct: true},
            { text: "HyperTell Markup Language", correct: false},
            { text: "HyperText Markup Link", correct: false},
            { text: "HyperText Mobile Language", correct: false},
        ]
    },
    {
        question: "Elemen HTML digambarkan oleh tag, ditulis menggunakan tanda …",
        answers : [
            { text: "Kurung Siku", correct: false},
            { text: "Kurung Sudut", correct: true},
            { text: "Kurung Kurawal", correct: false},
            { text: "Kurung Lengkung", correct: false},
        ]
    },
    {
        question: "Tag untuk membuat heading, kecuali …",
        answers : [
            { text: "h4", correct: false},
            { text: "h5", correct: false},
            { text: "h6", correct: false},
            { text: "h7", correct: true},
        ]
    },
    {
        question: "Sintak di bawah ini digunakan untuk membuat … <p> body style=”background-color: green;” ",
        answers : [
            { text: "Menambah warna latar belakang", correct: true},
            { text: "Membuat huruf tebal", correct: false},
            { text: "Membuat tulisan", correct: false},
            { text: "Membuat Link", correct: false},
        ]
    },
    {
        question: "Tag p berfungsi untuk …",
        answers : [
            { text: "Membuat Tombol", correct: false},
            { text: "Membuat List", correct: false},
            { text: "Membuat Title", correct: false},
            { text: "Membuat Paragraph", correct: true},
        ]
    },
    {
        question: "Tag html yang fungsinya untuk menghubungkan ke internal atau eksternal pada halaman web…",
        answers : [
            { text: "br", correct: false},
            { text: "a href", correct: true},
            { text: "&bnsp", correct: false},
            { text: "font", correct: false},
        ]
    },
    {
        question: "Salah satu atribut yang digunakan untuk menentukan URL gambar pada html adalah …",
        answers : [
            { text: "img", correct: false},
            { text: "alt", correct: false},
            { text: "src", correct: true},
            { text: "float", correct: false},
        ]
    },
    {
        question: "Atribut berikut yang digunakan untuk membuka link pada jendela atau tab baru adalah …",
        answers : [
            { text: "_blank", correct: true},
            { text: "_parent", correct: false},
            { text: "_inframe", correct: false},
            { text: "_self", correct: false},
        ]
    },
    {
        question: "Tag elemen yang digunakan untuk mengelompokkan suatu element atau tag-tag supaya menjadi suatu group adalah …",
        answers : [
            { text: "center", correct: false},
            { text: "div", correct: true},
            { text: "pre", correct: false},
            { text: "noshade", correct: false},
        ]
    },
    {
        question: "Informasi atau perintah tambahan yang berada dalam elemen HTML disebut …",
        answers : [
            { text: "Tag", correct: false},
            { text: "Elemen", correct: false},
            { text: "Atribut", correct: true},
            { text: "Action", correct: false},
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
    questionElement.innerHTML = `Nilai Kamu adalah benar ${score} dari ${questions.length}.`;
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
    window.location.href = "/class/class-html";
})

startQuiz();