<?php
    require_once('userDB.php');
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype="customer";
    function checkCharacters($input){
        $isOnlyLetters = true;
        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if (!($char >= 'a' && $char <= 'z') && !($char >= 'A' && $char <= 'Z') && !($char==' ')) {
                $isOnlyLetters = false;
                break;
            }
        }
        if(!$isOnlyLetters)
        {
            return true;
        }
        
    }
    function digitCheck($input, $digit)
    {
        if(strlen($input) <= $digit-1)
        {
            return true;
        }
    }
    if($fullname=="" || $username=="" || $email=="" || $password=="")
    {
        echo "null value inserted";
    }
    elseif(checkCharacters($fullname))
    {
        echo "only character is allowed in full name";
    }
    elseif(digitCheck($username,6))
    {
        echo "atleast 6 digit is needed for username";
    }
    elseif(digitCheck($password,6))
    {
        echo "atleast 6 digit is needed for password";
    }
    else
    {
        signup($fullname, $username, $password, $email, $usertype);
        header('Location: login.php');
        
    }

?>