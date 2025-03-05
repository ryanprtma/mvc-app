<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .alert {
            padding: 10px;
            background-color: #ffdddd;
            border-left: 5px solid #ff5c5c;
            color: #a94442;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        h1 {
            font-size: 1.8rem;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 97%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[disabled] {
            background: #e9ecef;
            cursor: not-allowed;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <?php if(isset($data['error'])) { ?>
        <div class="alert" role="alert">
            <?= $data['error'] ?>
        </div>
    <?php } ?>
    <h1>Profile</h1>
    <form method="post" action="/users/update">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" id="name" placeholder="Enter your name" value="<?= $data['user']['name'] ?? '' ?>">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input  name="username" type="text" id="username" placeholder="Username" value="<?= $data['user']['username'] ?? '' ?>">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</div>
</body>
</html>
