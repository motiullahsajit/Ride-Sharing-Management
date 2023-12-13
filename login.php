<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/loginvalidation.js"></script>
</head>
<body>

    <header>
        <div class="container">
            <h1>Ride Sharing Management - Driver Panel</h1>
        </div>
    </header>

    <section class="login-section">
        <div class="container">
            <form action="loginCheck.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
                <fieldset>
                    <h3 class="login-text">Login</h3>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" required>
                        <p id="un"></p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <p id="pass"></p>
                    </div>
                </fieldset>
                <input type="submit" name="submit" value="Login">
            </form>
            <div class="extra-links">
                <a href="forgetpassword.php">Forgot your password?</a>
                <p>Don't have an account? <a href="registration.php">Register here</a>.</p>
            </div>
        </div>
    </section>

</body>


</html>


