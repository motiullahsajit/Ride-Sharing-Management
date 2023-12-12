<html>
<head>
    <title>Registration form</title>
    <script src="js/registrationvalidation.js"></script>
</head>
<body>
    <form method="post" action="registrationCheck.php" enctype="application/x-www-form-urlencoded"         autocomplete="off" novalidate onsubmit="return validation()">
        <fieldset>
            <legend><h3>REGISTRATION</h3></legend>
            Full Name <br>
            <input type="text" id="fullname" name="fullname" value="" /> 
            <br>
            <br>
            User Name <br>
            <input type="text" id= "username" name="username" value="" /> <p id="uname"></p> <br>
            Email <br>
            <input type="email" id= "email" name="email" value="" /> <p id="email"></p> <br>
            Password <br>
            <input type="password" id= "password" name="password" value="" /> <p id="pass"></p> <br>
            
            <span id="fname"></span> <br>
    
            <p id='output'></p>
            <input type="submit" name="submit" value="Sign Up" />
            <input type="reset" name="reset" value="Reset" />
            <p>Already have an acccount? <a href="login.php">Log In</a></p>
        </fieldset>
            
    </form>
</body>
</html>