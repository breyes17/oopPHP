<?php 

// static class is fine if not instantiated.

class User{
    public $username;
    public static $minPassLength=5;
    public static function PasswordValidate($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

// display minpasslength
echo User::$minPassLength;

$pass = "bryan";

if(User::PasswordValidate($pass)){
    echo "Valid password";
} else {
    echo "Invalid Password";
}

?>