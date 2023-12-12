<?php
    require_once('DB.php');
    function status($avail,$reason)
    {
        $con = getConnection();
        $sql = "INSERT INTO status (availability, reason) VALUES ('$avail','$reason')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function getstatus(){
        $con = getConnection();
        $sql = "select * from status";
        $result = mysqli_query($con, $sql);
        $stats = [];
        
        while($stat = mysqli_fetch_assoc($result)){
            array_push($stats, $stat);
        }
        
        return $stats;
    }
?>