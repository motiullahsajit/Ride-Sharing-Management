<?php
    require_once('DB.php');
    function rating($username, $rate, $feed)
    {
        
        $con = getConnection();
        $sql = "INSERT INTO rate (username, rating, feedback) VALUES ('$username', '$rate', '$feed')";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function getRating(){
        $con = getConnection();
        $sql = "select * from rate";
        $result = mysqli_query($con, $sql);
        $rates = [];
        
        while($rate = mysqli_fetch_assoc($result)){
            array_push($rates, $rate);
        }
        
        return $rates;
    }
?>
?>