<?php
 include 'dbh.inc.php';
 $gotView = $_POST["gotView"];
 $sql2 = "SELECT * from acc_information where acc_id='".$gotView."'";
 $viewResult2 = mysqli_query($conn,$sql2);
 if(mysqli_num_rows($viewResult2) > 0){
    while($row = mysqli_fetch_assoc($viewResult2)){

        echo '<h6 style="margin-top:6%;margin-bottom:4%"> ADDRESS: ' .$row['acc_address']. '</h6>';
        echo '<h6 style="margin-top:4%;margin-bottom:4%"> Contact: '.$row['contact'].'</h6>';
        echo '<h6 style="margin-top:4%;margin-bottom:4%"> FACEBOOK: '.$row['facebook'].'</h6>';
        echo '<h6 style="margin-top:4%;margin-bottom:4%"> TWITTER: '.$row['twitter'].'</h6>';
        echo '<h6 style="margin-top:4%;margin-bottom:4%"> GITHUB: '.$row['github'].'</h6>';
        echo '<h6 style="margin-top:4%;margin-bottom:10%"> GOOGLE: '.$row['google'].'</h6>';
    }
 }