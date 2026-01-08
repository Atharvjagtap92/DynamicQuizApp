let currentQuestion = 0;
let score = 0;
let timer;
let timeLeft = 10;

function loadQuestion() {
    clearInterval(timer);
    timeLeft = 10;
    document.getElementById("timer").innerText = timeLeft;

    timer = setInterval(() => {
        timeLeft--;
        document.getElementById("timer").innerText = timeLeft;
        if (timeLeft === 0) {
            nextQuestion();
        }
    }, 1000);

    let q = questions[currentQuestion];
    document.getElementById("question").innerText = q.question;

    let html = "";
    q.options.forEach(opt => {
        html += `
        <label>
            <input type="radio" name="option" value="${opt}"> ${opt}
        </label>`;
    });
    document.getElementById("options").innerHTML = html;
}

function nextQuestion() {
    clearInterval(timer);

    let selected = document.querySelector('input[name="option"]:checked');
    if (selected && selected.value === questions[currentQuestion].correct) {
        score++;
    }

    currentQuestion++;

    if (currentQuestion < questions.length) {
        loadQuestion();
    } else {
        localStorage.setItem("score", score);
        localStorage.setItem("total", questions.length);
        window.location.href = "result.php";
    }
}

loadQuestion();
