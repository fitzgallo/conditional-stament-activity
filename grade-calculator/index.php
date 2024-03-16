<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Enter Your Score</h2>
    <form action="grade.php" method="GET">
        <label for="grade">Grade is:</label>
        <input type="number" id="grade" name="grade" min="0" max="100" required>
        <input type="submit" value="Calculate Grade">
    </form>
</body>
</html>