<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Phone Store</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>

    <div class="register-container">
        <h2>Create an Account</h2>
        <form action="#" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
            </div>

            <button type="submit" class="register-btn">Sign Up</button>

            <p class="login-link">Already have an account? <a href="/login.php">Login</a></p>
        </form>
    </div>

</body>
</html>
