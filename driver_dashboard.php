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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Dashboard</title>
    <link rel="stylesheet" href="css/driver_dashboard.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Welcome to Driver Dashboard</h1>
        </div>
    </header>

    <div class="content">
        <a href="driverprofile.php">Driver Profile</a>
        <a href="driversupport.php">Driver Support</a>
        <a href="driverresponse.php">Driver Response</a>
        <a href="licenseverification.php">License Verification</a>

        <br><br><br><br>
        <a href="logout.php">Logout</a>
    </div>

</body>

</html>
