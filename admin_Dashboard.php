<?php
session_start();

$timeout = 15 * 60;

if (isset($_SESSION['last_activity_time'])) {
    if (time() - $_SESSION['last_activity_time'] > $timeout) {
        session_unset();
        session_destroy();
        header('location: logout.php');
        exit;
    }
}

$_SESSION['last_activity_time'] = time();
?>

<html>
    <head>
        <title>admin dashboard</title>
    </head>
    
    <body>
        <h1>Welcome to Admin Dashboard</h1>
        <a href="validlicense.php">valid license</a><br>
        <a href="admin_driverstatus.php">driver status</a><br>
        <a href="admin_driversupport.php">driver support</a>
        
        
       
        <br><br><br><br><br><br>
        <a href="logout.php">logout</a>
    </body>
</html>