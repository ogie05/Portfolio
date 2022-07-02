<?php

include 'dbh.inc.php';

session_start();
$gotcheck = $_POST["checkV"];
if($gotcheck == 0){
    echo '<h4> To: Cant Message Your Self </h4>';
    exit();
}else{
$gotTomsg = $_POST["gotMessage"];
$gotTosender = $_SESSION["uid"];
if($gotTomsg == $_SESSION["uid"]){
    echo '<h2>TO: ';
    echo 'You Cannot Message Your Self';
    echo '</h2>';
    exit();
}else{  
    $sql = "SELECT * from account where acc_id = '".$gotTomsg."'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo '<h2>TO: ';
            echo $row["acc_Username"];
            echo '</h2>';
        }
    }
}
}



