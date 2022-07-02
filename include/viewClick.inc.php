<?php
    include 'dbh.inc.php';
    $gotView = $_POST["gotView"];
    $sql = "SELECT * FROM account where acc_id='".$gotView."'";
    $viewResult = mysqli_query($conn,$sql);
    if(mysqli_num_rows($viewResult) > 0){
       while($row = mysqli_fetch_assoc($viewResult)){
        echo '<hr>';
        echo '<h2>';
        echo $row['acc_Username'];
        echo '</h2>';
        echo '<h6>';
        echo 'USERNAME';
        echo '</h6>';
        echo '<hr>';
       }
       $sql2 = "SELECT * from acc_information where acc_id='".$gotView."'";
       $viewResult2 = mysqli_query($conn,$sql2);
       while($row = mysqli_fetch_assoc($viewResult2)){
         echo '<p> RANK: ' .$row['acc_lvl']. '</p>';   
       }
    }
    // $viewAcc = $_SESSION["viewAccId"];
    // //$viewUname = $_SESSION["viewAccUsername"];
    // echo '<p>';
    // echo $viewAcc;
    // echo '</p>';
  

    
 