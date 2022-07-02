<?php
include 'dbh.inc.php';
session_start();

$gotcheck = $_POST["checkV"];
if($gotcheck == 0){
    echo '<h5> Please search user you want to message first. </h5>';
    exit();
}else{
    $gotTomsg = $_POST["gotMessage"];
    $gotTosender = $_SESSION["uid"];
    $sql = "SELECT * from sendmessage where sender_1 = '".$gotTosender."' and sender_2 = '".$gotTomsg."' or sender_1 = '".$gotTomsg."' and sender_2 = '".$gotTosender."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if($gotTosender == $row["sender_1"]){
                echo '<div class="msg"><b>';
                echo $row["sender_msg"];
                echo '</b></div>';
            }else{
            echo '<div class="msg" style="background-color:lightgray;margin-right: 45%"><b>';
            echo $row["sender_msg"];
            echo '</b></div>';
            }


            echo '<script>
            // for the message sroll always at bottom
                var messageBody = document.querySelector("#msg-box");
                messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;    
            </script>';
        }
    }
}