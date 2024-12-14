<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Web Application</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="js/script.js">
</head>
<body>
    <h1>Welcome to Secure Web Application</h1>

    <!-- Registration Form -->
    <form method="POST">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="register">Register</button>
    </form>

    <!-- Login Form -->
    <form method="POST">
        <h2>Login</h2>
        <label for="username_or_email">Username or Email:</label>
        <input type="text" id="username_or_email" name="username_or_email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <!-- Forgot Password Form -->
    <form method="POST">
        <h2>Forgot Password</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit" name="forgot_password">Recover Password</button>
    </form>

    <!-- Admin Dashboard -->
    <form method="POST">
        <h2>Admin Dashboard</h2>
        <label for="month">Month:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>

        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>

        <button type="submit" name="dashboard">Display Logs</button>
    </form>

</body>
</html>