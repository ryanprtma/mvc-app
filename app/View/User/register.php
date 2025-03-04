<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background: #0056b3;
        }
        .alert {
            background: #ffcccc;
            color: #cc0000;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php if(isset($data['error'])) { ?>
        <div class="alert">
            <?= htmlspecialchars($data['error']) ?>
        </div>
    <?php } ?>
    <h1>Sign Up</h1>
    <form method="post" action="/users/register">
        <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" id="username" placeholder="Username" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" id="password" placeholder="Password">
        </div>
        <button class="btn" type="submit">Sign Up</button>
    </form>
</div>
</body>
</html>
