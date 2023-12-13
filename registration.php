<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/registration.css">
    <script src="js/registrationvalidation.js"></script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Ride Sharing Management - Driver Panel</h1>
        </div>
    </header>

    <form method="post" action="registrationCheck.php" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
        <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" value="" />
            </div>
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" value="" />
                <p id="uname"></p>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="" />
                <p id="email"></p>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="" />
                <p id="pass"></p>
            </div>
            <span id="fname"></span>
            <p id='output'></p>
            <input type="submit" name="submit" value="Sign Up" />
            <input type="reset" name="reset" value="Reset" />
            <p>Already have an account? <a href="login.php">Log In</a></p>
        </fieldset>

    </form>

</body>

</html>
