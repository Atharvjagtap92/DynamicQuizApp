<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2 id="question"></h2>

    <div id="options"></div>

    <p class="timer-text">⏱ Time Left: <span id="timer">10</span> sec</p>


    <button onclick="nextQuestion()">Next</button>
</div>

<script src="js/questions.js"></script>
<script src="js/quiz.js"></script>

</body>
</html>
