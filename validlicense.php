<?php
require_once('verificationDB.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Retrieve form data
    $vehicleModel = $_POST["vehicleModel"];
    $licensePlate = $_POST["licensePlate"];
    $licenseNumber = $_POST["licenseNumber"];
    if($vehicleModel=="" || $licensePlate=="" || $licenseNumber=="")
    {
        echo "null value inserted";
    }
    else
    {
        $status=validEntry($vehicleModel, $licensePlate, $licenseNumber);
        if($status)
        {
            echo "Valid Entries Inserted";
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
    <link rel="stylesheet" href="css/validlicense.css">
    <script src="js/licenseverification.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <h1>Vehicle and License Verification</h1>
        </div>
    </header>

    <div class="content">
        <form action="#" method="post" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate
            onsubmit="return validation()">
            <label for="vehicleModel">Vehicle Model:</label>
            <input type="text" id="vehicleModel" name="vehicleModel" required> <span id='vm'></span>

            <br>

            <label for="licensePlate">License Plate Number:</label>
            <input type="text" id="licensePlate" name="licensePlate" required> <span id='lp'></span>

            <br>

            <label for="licenseNumber">Driver's License Number:</label>
            <input type="text" id="licenseNumber" name="licenseNumber" required> <span id='ln'></span>

            <br>

            <input type="submit" name="value" value="Submit"><br>
            <a href="admin_Dashboard.php">Go Back</a>
        </form>
    </div>
</body>

</html>



