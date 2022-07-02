<?php
include 'include/head.inc.php';
include 'include/nav-login.inc.php';
?>
<section id="loginbg">
<form action="include/login.inc.php" method="POST"> 
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="board">
                    <div class="loginform">
                        <div class="row nopadding">
                                <div class="col-md-6 nopadding">
                                    <div class="col1">
                                        <img src="icon/login.png">                      
                                    </div> 
                                </div>
                            <div class="col-md-6 nopadding">
                                <div class="col2">
                                    
                                        <div class="welcome">                               
                                        <h3 style="font-family: 'Luckiest Guy', cursive;">welcome</h3>
                                        </div>
                                        <div class="userp">
                                        <p>Username</p>
                                        <input type="text" id="username" name="user" placeholder="Type your username">
                                        </div>
                                        <div class="passp">
                                        <p>Password</p>
                                        <input type="password" id="password" name="pass" placeholder="Type your password">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                                        
                                        <?php
                                    if (isset($_GET["error"])) {
                                        if($_GET["error"]== "emptyinput"){
                                            echo "<p style='background-color:red;'>Fill out all fields</p>";
                                        }else if ($_GET["error"]== "wronglogin") {
                                            echo "<p style='background-color:red;>Incorrect credential</p>";
                                        }
                                    }
                                   ?>
                                </div> 
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    </form>
</section>