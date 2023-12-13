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
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="css/customer_dashboard.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Welcome to Customer Dashboard</h1>
        </div>
    </header>

    <div class="content">
        <div class="dashboard-links">
            <a href="ratingfeedback.php">Rating Feedback</a>
            <a href="riderequest.php">Ride Request</a>
        </div>
    </div>

    <footer>
        <div class="container">
            <a href="logout.php">Logout</a>
        </div>
    </footer>
</body>

</html>
