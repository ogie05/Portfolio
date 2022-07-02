<?php
session_start();
include 'include/dbh.inc.php';
include 'include/head.inc.php';
include 'include/nav-login.inc.php';
?>

<section id="adminbg">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <form action="include/verify.inc.php" method="POST">
                    <div class="form-group">
                        <h1>COMPLETE YOUR PROFILE</h1>
                        <?php
                        if(isset($_SESSION["username"])){
                            $name = $_SESSION["username"];
                            echo '<h3>';
                            echo "Hello there ";
                            echo $name;
                            echo '</h3>';
                            }
                        ?>
                      <label for="address">Address</label>
                      <input type="text" class="form-control" name="address" placeholder="Enter Adress">
                      <label for="contact">Contact</label>
                      <input class="form-control" type="text" name="contact" placeholder="Enter Contact">
                      <label for="facebook">Facebook</label>
                      <input class="form-control" type="text" name="facebook" placeholder="Email / Username">
                      <label for="Twitter">Twitter</label>
                      <input class="form-control" type="text" name="twitter" placeholder="Twitter Account">
                      <label for="Github">Github</label>
                      <input class="form-control" type="text" name="github" placeholder="Github Account">
                      <label for="Google">Google Account</label>
                      <input class="form-control" type="text" name="google" placeholder="Google Account">
                      
                      <button type="submit" class="btn" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>