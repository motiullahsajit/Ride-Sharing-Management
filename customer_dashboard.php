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
        <title>customer dashboard</title>
    </head>
    <body>
        <h1>Welcome to Customer Dashboard</h1>
        <a href="ratingfeedback.php">rating feedback</a><br>
        <a href="riderequest.php">ride request</a><br>
        
       
        <br><br><br><br><br><br>
        <a href="logout.php">logout</a>
    </body>
</html>