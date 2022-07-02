<?php
if(isset($_POST['submit'])){
    session_start();
    require_once (realpath(dirname(__FILE__) . '/../include/dbh.inc.php'));
    
    $uid = $_SESSION['uid'];
    $verify = "yes";
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $github = $_POST['github'];
    $google = $_POST['google'];
    $acclvl = 1;

    $sql = "INSERT into acc_information (acc_id,verify,acc_address,contact,facebook,twitter,github,google,acc_lvl) values (?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"ississssi",$uid,$verify,$address,$contact,$facebook,$twitter,$github,$google,$acclvl);
    mysqli_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php");
    exit();
}else{
    header("location: ../login.php");
    exit();
}