<?php
    require_once('userDB.php');
    if(isset($_POST['username'],$_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username=="" || $password=="")
        {
            echo "Null value inserted";
        }
        else
        {
            forgetpassword($username,$password);
            echo "Password Changed Successfully";
        }
    }
?>
<html>
    <head>
        <title>Forget Password</title>
        <script src="js/forgetpassword.js"></script>

    </head>
    <body>
        <form action="forgetpassword.php" method="post" enctype="application/x-www-form-urlencoded"         autocomplete="off" novalidate onsubmit="return validation()">
            <fieldset>
                <h2>Forget Password</h2>
                username:
                <br>
                <input type="text" id="username" name="username"><span id="uname"></span>
                <br>
                password: 
                <br>
                <input type="text" id = "password" name="password"><span id="pass"></span>
                <br>
                <input type="submit" value="submit">
            </fieldset>
        </form>
    </body>
</html>

