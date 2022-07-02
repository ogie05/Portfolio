<?php

if(isset($_POST["submit"])){
   
    $user= $_POST["user"];
    $pass= $_POST["pass"];
    
    require_once (realpath(dirname(__FILE__) . '/../include/dbh.inc.php'));
    require_once (realpath(dirname(__FILE__) . '/../include/function.inc.php'));

    if(emptyinputLogin($user,$pass)!==false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    loginUser($conn,$user,$pass);
    
}else{
    header("location: login.php");
    exit();
}