<?php
session_start();
include 'include/dbh.inc.php';
include 'include/head.inc.php';
include 'include/nav-login.inc.php';
?>
<section id="profile-bg">
<div class="container-fluid">
<form action="include/upload.inc.php" method="POST" enctype="multipart/form-data">


    <div class="row"> 
        
        <div class="col-sm-3 col-lg-3 nopadding">
          
                <section id="profile">
                <img src="icon/myprofileicon.png">
                <input type="file" name="file">
                <button type="submit" name="upload">Upload</button>
                <script src="script.js?v=<?php echo time(); ?>"></script>
</form> 


            <div id="viewSelect">
                <?php
                if(isset($_SESSION["username"])){
                $name = $_SESSION["username"];
                echo '<hr>';
                echo '<h2>';
                echo $name;
                echo '</h2>';
                echo '<h6>';
                    echo 'USERNAME';
                    echo '</h6>';
                    echo '<hr>';
                $lvl = $_SESSION["lvl"];

                echo '<h6> RANK: ' .$lvl. '</h6>';    
                }
                ?>
            </div>

                
           
                <button type="button" class="btn">Follow</button>
                <button type="button" class="btn clsMsgBtn" name="message" onclick="callMsg();">Message</button>
           
               
                </section>
            
        </div>

    <!-- for view/fetch all database -->
        <div class="col-sm-9 col-lg-9 nopadding">
            
                <section id="view">
                    <form action="profile.php" method="POST">
                    <div class="searchpos">
                        <input type="text" name="search" placeholder="Search..." class="search">
                        <button type="submit" name="searchbtn" class="btn">Search</button>
                    </div>
                    </form>
                    <table class="table table-dark table-hover tablecss" id="searchTbl">
                        <thead>
                            <tr>
                            <th scope="col">Account ID</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Option</th>
                           
    
                            </tr>
                        </thead>
                        <tbody>
                       
                        <?php
                            include 'include/search.inc.php';
                            if(isset($_GET["vClick"])){
                                echo $vId;
                            }
                        ?>

                
                        </tbody>
                   
                    </table>      
                </section>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-sm-3 col-lg-3 nopadding">
            <section id="profile-about">
                <div id="viewSelect2">
                    <?php
                    if(isset($_SESSION['username'])){
                        $address = $_SESSION['address'];
                        $contact = $_SESSION['contact'];
                        $facebook = $_SESSION['facebook'];
                        $twitter = $_SESSION['twitter'];
                        $github = $_SESSION['github'];
                        $google = $_SESSION['google'];
                    echo '<h6 style="margin-top:6%;margin-bottom:4%"> ADDRESS: ' .$address. '</h6>';
                    echo '<h6 style="margin-top:4%;margin-bottom:4%"> Contact: '.$contact.'</h6>';
                    echo '<h6 style="margin-top:4%;margin-bottom:4%"> FACEBOOK: '.$facebook.'</h6>';
                    echo '<h6 style="margin-top:4%;margin-bottom:4%"> TWITTER: '.$twitter.'</h6>';
                    echo '<h6 style="margin-top:4%;margin-bottom:4%"> GITHUB: '.$github.'</h6>';
                    echo '<h6 style="margin-top:4%;margin-bottom:10%"> GOOGLE: '.$google.'</h6>';
                    }
                    ?>
                 </div>
               
                <button type="button" class="btn">TDB</button>
                <button type="button" class="btn">TBD</button>
            </section>
        </div>
        <!-- message container -->
        <div class="col-sm-9 col-lg-9 nopadding">
        <section id="message-con">
            <div id="toMessage">
            <h2>TO:
           </h2>
            </div>
                   
<div class="msg-box" id="msg-box">
                <div id="callMsg">
                </div>
            </div>
            <script>
            // for the message sroll always at bottom
                var messageBody = document.querySelector('#msg-box');
                messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;    
            </script>   
            <div class="input-msg">
                
                <input type="text" name="msgName" class="inputmsgclass" id="msgId" placeholder="Message here..."><button type="button" class="btnSend sendMsg" onclick="callMsg();">SEND</button>
                <div id="phpmsg">
              
                </div>
            </div>
        </section>
        </div>
    </div>
</div>

</section>

