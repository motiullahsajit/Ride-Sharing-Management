<?php
    require_once('DB.php');
    function login($username, $password){
    $con = getConnection();
    $sql = "select * from user where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    
    
    
    if($user){
        return $user;
    }
    else{
        return false;
    }
}
function getProfile($username){
    $con = getConnection();
    $sql = "select * from user where username='{$username}'";
    $result = mysqli_query($con, $sql);
    $users = [];
    
    while($user = mysqli_fetch_assoc($result)){
        array_push($users, $user);
    }
    
    return $users;
}
function updateProfile($name,$username,$email,$password){
    $con = getConnection();
    $sql = "UPDATE user SET full_name='$name', email='$email', password='$password' WHERE username='$username'";

    $result = mysqli_query($con, $sql);
          
    if ($result) {
        return true;
    } else {
        echo "Error: " . mysqli_error($con);
        return false; 
    }
}
function forgetpassword($username,$password){
    $con = getConnection();
    $sql = "UPDATE user SET password='$password' WHERE username='$username'";

    $result = mysqli_query($con, $sql);
          
    if ($result) {
        return true;
    } else {
        echo "Error: " . mysqli_error($con);
        return false; 
    }
}
function signup($fullname, $username, $password, $email, $usertype)
{
    
    $con = getConnection();
    $sql = "INSERT INTO user (full_name, username, password, email, usertype) VALUES ('$fullname', '$username', '$password', '$email', '$usertype')";

    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>


