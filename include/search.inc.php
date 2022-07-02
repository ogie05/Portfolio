<?php
   
        if(isset($_SESSION["uid"])){
            if(isset($_POST['searchbtn'])){
                if(!empty($_POST['search'])){
                    $search = $_POST['search'];
                    $sql = "SELECT * FROM account where acc_Username like '%$search%';";
                    $result = mysqli_query($conn,$sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){          
                        echo '<tr>';
                        echo '<th scope="row">'; 
                        echo $row['acc_id'];
                        echo '</th>';
                        echo '<td class="disablecursor">';
                        echo $row['fullname'];
                        echo '</td>
                        <td class="disablecursor">';
                        echo $row['acc_Username'];
                        echo '</td>
                        <td class="disablecursor">';
                        echo $row['acc_Email'];
                        echo '</td>
                        <td>';
                        
                        echo '<button type="button" class="btn vClickClass" onclick="viewClick();" name="vClick">VIEW</button>';
                       // $vId = '<p id="viewId" name="viewId1"></p>';  
                       // echo $vId;  
                       
                     

                       // session_start();
                        echo '</td>'; 
                        echo '</tr>';
                        
                        }
                       
                    }else{
                       // header("location:profile.php");
                        echo "<h3>0 result</h3>";
                    }
                }else{
                    echo "<h3>Search something</h3>";
                }
            }else{
                echo "<h3>You didnt search</h3>";
            }
        }else{
            header("location: login.php?error=nologin");
            exit();
        }
        mysqli_close($conn); 