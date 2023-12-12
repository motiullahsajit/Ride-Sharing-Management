<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver Availability Status</title>
    <script src="js/driverstatus.js"></script>
</head>
<body>

    <h1>Driver Availability Status</h1>

    <form action="driverstatus.php" method="post" >
        <label for="availability">Availability Status:</label>
        <select id= "availability" name="availability" required> <span id="av"></span>
            <option value="available">Available</option>
            <option value="unavailable">Unavailable</option>
        </select>

        <br>

        <label for="reason">Reason (if unavailable):</label>
        <textarea id="reason" name="reason" rows="4"></textarea> <span id="unav"></span>

        <br>

        <input type="submit" value="Update Status">
    </form>

</body>
</html>

<?php
    require_once('statusDB.php');
    if(isset($_POST['availability'],$_POST['reason']))
    {
        $avail=$_POST['availability'];
        $reason=$_POST['reason'];
        if($avail=="")
        {
            echo "Null value inserted";
        }
        else
        {
            status($avail,$reason);
            echo "Status Updated";
        }
    }
?>