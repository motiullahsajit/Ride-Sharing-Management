<?php
    require_once('userDB.php');
    session_start();
    $username=$_SESSION['username'];
    $users=getProfile($username);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Profile</title>
</head>
<body>

    <h1>Driver Profile</h1>
    <?php for($i=0;$i<count($users);$i++)
            {?>
                
    

    <form action="updateprofile.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?=$users[$i]['full_name']?>" >

        <br>
        <label for="name">username:</label>
        <input type="text" id="name" name="username" value="<?=$users[$i]['username']?>" >

        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?=$users[$i]['email']?>" >
        <br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?=$users[$i]['password']?>" >

        <?php   }?>
        <br>
        <a href="updateprofile.php">update profile</a>
        <br><a href="driver_dashboard.php">go back</a>
    </form>

</body>
</html>
