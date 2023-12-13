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
    <link rel="stylesheet" href="css/driverprofile.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Driver Profile</h1>
        </div>
    </header>

    <div class="content">
        <?php for ($i = 0; $i < count($users); $i++) { ?>
            <form action="updateprofile.php" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?= $users[$i]['full_name'] ?>" readonly>

                <br>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?= $users[$i]['username'] ?>" readonly>

                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= $users[$i]['email'] ?>" readonly>
                <br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?= $users[$i]['password'] ?>" readonly>

                <br>

                <a href="updateprofile.php">Update Profile</a>
                <a href="driver_dashboard.php">Go Back</a>
                
            </form>
        <?php } ?>
    </div>

</body>

</html>
