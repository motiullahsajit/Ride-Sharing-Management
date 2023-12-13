<?php
    require_once('reqDB.php');

    $entries=getRequest();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Requests</title>
    <link rel="stylesheet" href="css/driverresponse.css">
    <script src="js/driverresponse.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>Ride Requests</h1>
        </div>
    </header>

    <div class="content">
        <?php for ($i = 0; $i < count($entries); $i++) { ?>

            <form action="#" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate onsubmit="return validation()">
                <label for="requester">Requester Name:</label>
                <input class="input-field" type="text" id="requester" name="requester" value="<?= $entries[$i]['requester'] ?>">

                <br>

                <label for="pickup">Pickup Location:</label>
                <input class="input-field" type="text" id="pickup" name="pickup" value="<?= $entries[$i]['pickup_location'] ?>">

                <br>

                <label for="destination">Destination:</label>
                <input class="input-field" type="text" id="destination" name="destination" value="<?= $entries[$i]['destination'] ?>">

                <br>

                <label for="date">Date:</label>
                <input class="input-field" type="date" id="date" name="date" value="<?= $entries[$i]['date'] ?>">

                <br>

                <label for="time">Time:</label>
                <input class="input-field" type="time" id="time" name="time" value="<?= $entries[$i]['time'] ?>">

                <br>
                <fieldset>
                    <legend>Response</legend>
                    <input type="radio" id="accept" name="status" value="accept"> Accept Request

                    <input type="radio" id="decline" name="status" value="decline"> Decline Request
                    <br>
                    <p id="statusError"></p>
                </fieldset>

                <?php } ?>
                <br>

                <input class="submit-button" type="submit" value="Submit">
                <a href="driver_dashboard.php">Go Back</a>
            </form>
    </div>

</body>

</html>


<?php
    
    if(!isset($_POST['status']))
    {
        
        $status="";
        
        
    }
    else
    {
        $status=$_POST['status'];
        if($status=="")
        {
            echo "Null value inserted";
        }
        elseif($status=="accept")
        {
            echo "Ride request accepted";
        }
        else
        {
            echo "Ride request declined";
        }
    }
    
?>
