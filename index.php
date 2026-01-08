<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Quiz App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>🚀 Dynamic Quiz Application</h1>
    <p>Select category & difficulty to begin</p>


    <label>Category</label>
    <select>
        <option>General</option>
        <option>Math</option>
        <option>Logic</option>
    </select>

    <label>Difficulty</label>
    <select>
        <option>Easy</option>
        <option>Medium</option>
        <option>Hard</option>
    </select>

    <button onclick="startQuiz()">Start Quiz</button>
</div>

<script>
function startQuiz(){
    window.location.href = "quiz.php";
}
</script>

</body>
</html>
