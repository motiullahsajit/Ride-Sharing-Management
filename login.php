<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="js/script.js"></script>
</head>
<header>
    <center>
        <h1>Ride Sharing Management - Driver Panel</h1>
</center>

</header>
<center>

    <body>

        <form action="loginCheck.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
            <fieldset>
                <legend align='center'>Login</legend>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" id="username" name="username"></td>
                        <td><p id="un"></p></td>
                    </tr>
                    <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password"></td>
                    <td><p id="pass"></p></td>
                    </tr>
                </table>

                <br>
                

            </fieldset>
            <br>

            <input type="submit" name="submit" value="login" >
            <br>
            <br>


        </form>
        <a href="forgetpassword.php">forget password?</a>
        <p>
            Don't have an Account? <a href="registration.php">Click here</a> for Registration.
        </p>

    </body>
</center>

</html>


