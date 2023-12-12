<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Requests</title>
</head>
<body>

    <h1>Ride Requests</h1>

    <form action="#" method="post" novalidate>
        <label for="requester">Requester Name:</label>
        <input type="text" id="requester" name="requester" required>

        <br>

        <label for="pickup">Pickup Location:</label>
        <input type="text" id="pickup" name="pickup" required>

        <br>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>

        <br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <br>

        

        <br>

        <input type="submit" value="Submit">
        <br><a href="customer_dashboard.php">go back</a>
    </form>

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