<?php
include 'include/head.inc.php';
include 'include/nav-register.inc.php';
?>
<section id="loginbg">
<form action="include/register.inc.php" method="POST"> 
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="board">
                    <div class="registerform">
                        <div class="row nopadding">
                                <div class="col-md-6 nopadding">
                                    <div class="col1" style="height: 720px;">
                                        <img src="icon/login.png">                      
                                    </div> 
                                </div>
                            <div class="col-md-6 nopadding">
                                <div class="col2" style="height: 720px;">
                                    
                                        <div class="welcome">                               
                                        <h3 style="font-family: 'Luckiest Guy', cursive;">welcome</h3>
                                        </div>
                                        <div class="userp">
                                        <p>Fullname</p>
                                        <input type="text" id="fullname" name="name" placeholder="Type your fullname">
                                        </div>
                                        <div class="passp">
                                        <p>Username</p>
                                        <input type="text" id="username" name="user" placeholder="Type your username">
                                        </div>
                                        <div class="passp">
                                        <p>Email</p>
                                        <input type="text" id="email" name="mail" placeholder="Type your email">
                                        </div>
                                        <div class="passp">
                                        <p>Password</p>
                                        <input type="password" id="password" name="pass" placeholder="Type your password">
                                        </div>
                                        <div class="passp">
                                        <p>Retype Password</p>
                                        <input type="password" id="password" name="pass2" placeholder="Retype your password">
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="submit">Register</button>
                                   <?php
                                    if (isset($_GET["error"])) {
                                        if($_GET["error"]== "emptyinput"){
                                            echo "<p>Fill out all fields</p>";
                                        }else if ($_GET["error"]== "invalidUser") {
                                            echo "<p>Input valid username</p>";
                                        }else if ($_GET["error"]== "invalidEmail") {
                                            echo "<p>Input valid email</p>";
                                        }else if ($_GET["error"]== "password-did-not-match") {
                                            echo "<p>Password did not match</p>";
                                        }else if ($_GET["error"]== "stmt-failed") {
                                            echo "<p>Somethings Went wrong please sign up again</p>";
                                        }else if ($_GET["error"]== "username-taken") {
                                            echo "<p>Username already exist</p>";
                                        }else if ($_GET["error"]== "none") {
                                            echo "<p>Account Created succesfully</p>";
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