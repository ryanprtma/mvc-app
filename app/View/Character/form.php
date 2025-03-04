<!DOCTYPE html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        text-align: center;
        padding: 50px;
    }

    h1 {
        color: #333;
    }

    form {
        background: white;
        padding: 20px;
        display: inline-block;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input {
        padding: 10px;
        margin: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 15px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: #0056b3;
    }

    p {
        font-size: 18px;
        color: #333;
        margin-top: 20px;
    }
</style>
<html lang="eng">
<head><title>Character Analyzer</title></head>
<body>
<h1>Character Analyzer</h1>
<form method="POST" action="/character/analyze">
    <input type="text" name="input1" placeholder="Enter first input" required>
    <input type="text" name="input2" placeholder="Enter second input" required>
    <button type="submit">Analyze</button>
</form>
<?php if (isset($data['percentage'])): ?>
    <p>Matching Percentage: <?= number_format($data['percentage'], 2) ?>%</p>
<?php endif; ?>
</body>
</html>
<?php