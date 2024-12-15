<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Application of Information Security</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>WEB APPLICATION OF INFORMATION SECURITY</h1>
        <div class="buttons">
            <a href="{{ url('/login') }}" class="button">LOG IN</a>
            <a href="{{ url('/register') }}" class="button">REGISTER</a>
        </div>
    </div>
</body>
</html>
