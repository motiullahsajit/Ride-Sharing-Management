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
</head>
<body>

    <h1>Ride Requests</h1>
    <?php for($i=0;$i<count($entries);$i++)
            {?>
            

    <form action="#" method="post" enctype="application/x-www-form-urlencoded"    autocomplete="off" novalidate>
        <label for="requester">Requester Name:</label>
        <input type="text" id="requester" name="requester" value="<?=$entries[$i]['requester']?>" >

        <br>

        <label for="pickup">Pickup Location:</label>
        <input type="text" id="pickup" name="pickup" value="<?=$entries[$i]['pickup_location']?>" >

        <br>

        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" value="<?=$entries[$i]['destination']?>">

        <br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?=$entries[$i]['date']?>">

        <br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" value="<?=$entries[$i]['time']?>">

        <br>
        <fieldset style="width: 300px;">
        <legend>Response</legend>
        <input type="radio" id="accept" name="status" value="accept"> Accept Request
        
        <input type="radio" id="decline" name="status" value="decline"> Decline Request
        </fieldset>
        
        
        <?php   }?>
        <br>

        <input type="submit" value="Submit">
        <br><a href="driver_dashboard.php">go back</a>
    </form>

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
