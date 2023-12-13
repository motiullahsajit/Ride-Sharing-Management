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
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admindashboard.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Welcome to Admin Dashboard</h1>
        </div>
    </header>

    <div class="content">
        <a href="validlicense.php" class="dashboard-link">Valid License</a>
        <a href="admin_driverstatus.php" class="dashboard-link">Driver Status</a>
        <a href="admin_driversupport.php" class="dashboard-link">Driver Support</a>
    </div>

    <footer>
        <div class="container">
            <a href="logout.php">Logout</a>
        </div>
    </footer>
</body>

</html>
