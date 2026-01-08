<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="container">
    <h1>🎯 Quiz Performance</h1>


    <p id="resultText"></p>

    <canvas id="resultChart"></canvas>
</div>

<script>
let score = localStorage.getItem("score");
let total = localStorage.getItem("total");
let wrong = total - score;

document.getElementById("resultText").innerText =
    `Correct: ${score} | Wrong: ${wrong} | Total: ${total}`;

new Chart(document.getElementById("resultChart"), {
    type: 'pie',
    data: {
        labels: ['Correct', 'Wrong'],
        datasets: [{
            data: [score, wrong],
            backgroundColor: ['#48bb78', '#e53e3e']
        }]
    }
});
</script>

</body>
</html>
