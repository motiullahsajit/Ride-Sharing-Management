<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Requests</title>
    <link rel="stylesheet" href="css/riderequest.css">
    <script src="js/riderequest.js"></script>
</head>

<body>

    <header>
        <div class="container">
            <h1>Ride Requests</h1>
        </div>
    </header>

    <div class="content">
    <div class="button-container">
            <a href="customer_dashboard.php" class="back-button">Go Back</a>
        </div>
        <form action="#" method="post" novalidate onsubmit="return validation()">
            <label for="requester">Requester Name:</label>
            <input type="text" id="requester" name="requester" required>
            <p id="requesterError"></p>

            <label for="pickup">Pickup Location:</label>
            <input type="text" id="pickup" name="pickup" required>
            <p id="pickupError"></p>

            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>
            <p id="destinationError"></p>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <p id="dateError"></p>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
            <p id="timeError"></p>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>


<?php
    require_once('reqDB.php');
    if(isset($_POST['requester'],$_POST['pickup'],$_POST['destination'],$_POST['date'],$_POST['time']))
    {
        $req=$_POST['requester'];
        $pick=$_POST['pickup'];
        $dest=$_POST['destination'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        if($req=="" || $pick=="" || $dest==""|| $date==""|| $time=="")
        {
            echo "Null value inserted";
        }
        else
        {
            requester($req,$pick,$dest,$date,$time);
            echo "Request Sent";
        }
    }
?>