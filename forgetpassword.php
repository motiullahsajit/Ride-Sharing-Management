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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="css/forgetpassword.css">
    <script src="js/forgetpassword.js"></script>
</head>

<body>
    
    <header>
        <div class="container">
            <h1>Ride Sharing Management - Driver Panel</h1>
        </div>
    </header>

    <form action="forgetpassword.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
        <fieldset>
            <h2>Forget Password</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
                <span id="uname"></span>
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password">
                <span id="pass"></span>
            </div>
            <input type="submit" value="Submit">
        </fieldset>
    </form>

</body>

</html>

