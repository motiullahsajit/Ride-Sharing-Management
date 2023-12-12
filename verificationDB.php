<?php
require_once('DB.php');
function validEntry($vehicleModel, $licensePlate, $licenseNumber)
{
    $con = getConnection();
    $sql = "INSERT INTO verification_data (vehicleModel, licensePlate, licenseNumber) VALUES ('$vehicleModel', '$licensePlate', '$licenseNumber')";
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }

}

function licenseVerification($vehicleModel, $licensePlate, $licenseNumber)
{
    $con = getConnection();
    $sql = "select * from verification_data where vehicleModel='{$vehicleModel}' and licensePlate='{$licensePlate}' and licenseNumber='{$licenseNumber}'";
    $result = mysqli_query($con, $sql);
    $entry = mysqli_fetch_assoc($result);
    if ($entry) {
        return $entry;
    } else {
        return false;
    }
}



    
?>
