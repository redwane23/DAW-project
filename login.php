<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Phone Store</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>

    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>

            <p class="signup-link">Don't have an account? <a href="/register.php">Sign up</a></p>
        </form>
    </div>

</body>
</html>
