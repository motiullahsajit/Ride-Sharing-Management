<?php
    require_once('userDB.php');
    session_start();
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    

    if($username=="" || $password == "")
    {
        echo "null username or password";
    }
    else{
        $status=login($username, $password);
        if($status)
        {
            if ($status['usertype'] == "admin"){
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: admin_Dashboard.php');
            }
            elseif ($status['usertype'] == "customer") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: customer_dashboard.php');
            }
            elseif ($status['usertype'] == "driver") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: driver_dashboard.php');
            }
        }else{
            echo"wrong username or password";
        }
    }

?>