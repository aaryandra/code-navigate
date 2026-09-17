const questions = [
    {
        question: "Aturan untuk mengendalinkan beberapa komponen dalam sebuah web sehngga akan lebih terstruktur dan seragam yang bertujuan untuk mengatur gaya (style) tampilan webiste adalah...",
        answers : [
            { text: "HTML", correct: false},
            { text: "CSS", correct: true},
            { text: "JavaScript", correct: false},
            { text: "PHP", correct: false},
        ]
    },
    {
        question: "Format penilisan sintaks CSS yang benar adalah...",
        answers : [
            { text: "Selector {Property: value;}", correct: true},
            { text: "Property {Selector: value;}", correct: false},
            { text: "Selector {Property; value;}", correct: false},
            { text: "Selector {value: property;}", correct: false},
        ]
    },
    {
        question: "Untuk memberi warna teks pada web diatur dengan mengubah nilai atribut …",
        answers : [
            { text: "Body", correct: false},
            { text: "Bg Color", correct: false},
            { text: "Font Color", correct: true},
            { text: "Font Size", correct: false},
        ]
    },
    {
        question: "CSS merupakan singkatan dari ....",
        answers : [
            { text: "Cascading Style Sheet", correct: true},
            { text: "Conversion Sheet Style", correct: false},
            { text: "Cascading Sheet Style", correct: false},
            { text: "Condision Style Sheet", correct: false},
        ]
    },
    {
        question: "Pada CSS, untuk menambahkan background color untuk semua tag h1 adalah :",
        answers : [
            { text: ".h1 {background-color:#FFFFFF }", correct: false},
            { text: "#h1 {background-color:#FFFFFF }", correct: false},
            { text: "all.h1 {background-color:#FFFFFF }", correct: false},
            { text: "h1 {background-color:#FFFFFF }", correct: true},
        ]
    },
    {
        question: "Penulisan selektor yang benar jika elemen yang akan di beri format adalah id='menu'....",
        answers : [
            { text: ".menu", correct: false},
            { text: "*menu", correct: false},
            { text: "#menu", correct: true},
            { text: "menu", correct: false},
        ]
    },
    {
        question: "Manakah sintaks CSS yang benar?",
        answers : [
            { text: "body:color=black;", correct: false},
            { text: "{body;color:black;}", correct: false},
            { text: "{body:color=black;}", correct: false},
            { text: "body {color:black;}", correct: true},
        ]
    },
    {
        question: "Perhatikan script CSS dibawah ini: <br><br> p {color:red;} <br><br> Yang disebut property adalah...",
        answers : [
            { text: "p", correct: false},
            { text: "red", correct: false},
            { text: "color", correct: true},
            { text: "color:red", correct: false},
        ]
    },
    {
        question: "Properti yang digunakan untuk mengubah warna latar belakang?",
        answers : [
            { text: "bgcolor:", correct: false},
            { text: "background:url(“file.extension”)", correct: false},
            { text: "background-color:", correct: true},
            { text: "background-color-style:", correct: false},
        ]
    },
    {
        question: "Tag HTML yang digunakan untuk mendefinisikan style sheet internal?",
        answers : [
            { text: "tag script", correct: false},
            { text: "tag style", correct: true},
            { text: "tag css", correct: false},
            { text: "tag a href", correct: false},
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
    window.location.href = "/class/class-css";
})

startQuiz();