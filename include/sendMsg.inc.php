<?php
include 'dbh.inc.php';
session_start();

$gotcheck = $_POST["checkV"];
if($gotcheck == 0){
    echo '<h4> Please view the user you want to message. </h4>';
    exit();
}else{
    $gotTosender = $_SESSION["uid"];
    $gotTomsg = $_POST["gotMessage"];
    $messageSend = $_POST["senderMessage"];

    if(!$messageSend == null){
        if($gotTomsg == $gotTosender){
            echo '<h4>Cant Message Your Self </h4>';
            exit();
        }else{
        $sql1 = "INSERT into sendmessage (sender_1,sender_2,sender_msg) values (?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sql1);
        mysqli_stmt_bind_param($stmt,"iis",$gotTosender,$gotTomsg,$messageSend);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        }
    }
}