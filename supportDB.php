<?php
require_once('DB.php');
function issue($issueType, $desc)
{
    
    $con = getConnection();
    $sql = "INSERT INTO driverissue (issuetype, description) VALUES ('$issueType', '$desc')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
function getsupport(){
    $con = getConnection();
    $sql = "select * from driverissue";
    $result = mysqli_query($con, $sql);
    $supports = [];
    
    while($support = mysqli_fetch_assoc($result)){
        array_push($supports, $support);
    }
    
    return $supports;
}
?>