<?php
require_once('verificationDB.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $vehicleModel = $_POST["vehicleModel"];
    $licensePlate = $_POST["licensePlate"];
    $licenseNumber = $_POST["licenseNumber"];
    if($vehicleModel=="" || $licensePlate=="" || $licenseNumber=="")
    {
        echo "null value inserted";
    }
    else
    {
        $status=licenseVerification($vehicleModel, $licensePlate, $licenseNumber);
        if($status)
        {
            echo "Verification Successful";
        }
        else
        {
            echo "Verification Failed";
        }
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle and License Verification</title>
    <script src="js/licenseverification.js"></script>
</head>
<body>

    <h1>Vehicle and License Verification</h1>

    <form action="#" method="post" enctype="application/x-www-form-urlencoded"         autocomplete="off" novalidate onsubmit="return validation()">
        <label for="vehicleModel">Vehicle Model:</label>
        <input type="text" id="vehicleModel" name="vehicleModel" required> <span id='vm'></span>

        <br>

        <label for="licensePlate">License Plate Number:</label>
        <input type="text" id="licensePlate" name="licensePlate" required> <span id='lp'></span>

        <br>

        <label for="licenseNumber">Driver's License Number:</label>
        <input type="text" id="licenseNumber" name="licenseNumber" required> <span id='ln'></span>

        <br>

        <input type="submit" name="submit" value="Verify">
        <br><a href="driver_dashboard.php">go back</a>
    </form>

</body>
</html>


