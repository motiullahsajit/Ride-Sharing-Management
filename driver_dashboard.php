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
        <title>driver dashboard</title>
    </head>
    <body>
        <h1>Welcome to Driver Dashboard</h1>
        <a href="driverprofile.php">driver profile</a><br>
        <a href="driversupport.php">driver support</a><br>
        <a href="driverresponse.php">driver response</a><br>
        <a href="licenseverification.php">license verification</a>
        <br><br><br><br><br><br>
        <a href="logout.php">logout</a>
    </body>
</html>