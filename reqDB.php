<?php
    require_once('DB.php');
    function requester($req,$pick,$dest,$date,$time)
    {
        $con = getConnection();
        $sql = "INSERT INTO riderequest (requester, pickup_location,destination,date,time) VALUES ('$req','$pick','$dest','$date','$time')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function getRequest()
    {
        $con = getConnection();
        $sql = "select * from riderequest";
        $result = mysqli_query($con, $sql);
        $entries = [];
        
        while($entry = mysqli_fetch_assoc($result)){
            array_push($entries, $entry);
        }
        
        return $entries;
    }
?>