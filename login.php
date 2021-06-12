<?php
    include_once 'header.php';
?>

        <section id="login-form">
            <h2>Log In</h2>
            <form class="form-group" action="includes/login.inc.php" method="POST">
                <input type="text" name="uid" placeholder="Username/Email..." class="form-control mx-auto" style="width:20rem;"><br>
                <input type="password" name="pwd" placeholder="Password..." class="form-control mx-auto" style="width:20rem;"><br>
                <button type="submit" name="submit" class="form-control btn-dark mx-auto" style="width:20rem;">Log In</button>
            </form>

            <?php
            //check for errors
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>All fields must be completed!</p>";
                    }
                    else if ($_GET["error"] == "wronglogin"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>Your credentials are incorrect!</p>";
                    }
                }
            ?>
        </section>
   
<?php
    include_once 'footer.php';
?>