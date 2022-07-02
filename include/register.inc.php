<?php
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $user= $_POST["user"];
    $mail= $_POST["mail"];
    $pass= $_POST["pass"];
    $pass2= $_POST["pass2"];

    require_once (realpath(dirname(__FILE__) . '/../include/dbh.inc.php'));
    require_once (realpath(dirname(__FILE__) . '/../include/function.inc.php'));

    if(emptyInputRegister($name,$user,$mail,$pass,$pass2) !== false){
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    if(invalidUid($user) !== false){
        header("location: ../register.php?error=invalidUser");
        exit();
    }
    if(invalidEmail($mail) !== false){
        header("location: ../register.php?error=invalidEmail");
        exit();
    }
    if(passmatch($pass,$pass2) !== false){
        header("location: ../register.php?error=password-did-not-match");
        exit();
    }
    if(userTaken($conn,$user,$mail) !== false){
        header("location: ../register.php?error=username-taken");
        exit();
    }
    
    createUser($conn, $name,$user,$mail,$pass);
    
}else{
    header("location: ../register.php");
    exit();
}