<?php
    include_once 'header.php';
?>

        <section id="signup-form"">
            <h2>Sign Up</h2>
            <form class="form-group" action="includes/signup.inc.php" method="POST">
                <input type="text" name="name" placeholder="Full name..." class="form-control mx-auto" style="width:20rem;"><br>
                <input type="text" name="email" placeholder="Email..." class="form-control mx-auto" style="width:20rem;"><br>
                <input type="text" name="uid" placeholder="Username..." class="form-control mx-auto" style="width:20rem;"><br>
                <input type="password" name="pwd" placeholder="Password..." class="form-control mx-auto" style="width:20rem;"><br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password..." class="form-control mx-auto" style="width:20rem;"><br>
                <button type="submit" name="submit" class="form-control btn-dark mx-auto" style="width:20rem;">Sign Up</button>
            </form>

            <?php
            // check for errors
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>All fields must be completed!</p>";
                    }
                    else if ($_GET["error"] == "invaliduid"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>Choose a proper username!</p>";
                    }
                    else if ($_GET["error"] == "invalidemail"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>Choose a proper email!</p>";
                    }
                    else if ($_GET["error"] == "passwordsdontmatch"){
                        echo "<p class='alert alert-danger mx-auto text-center' style='width:30rem;'>Your passwords don't match!</p>";
                    }
                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p class='alert alert-primary mx-auto text-center' style='width:30rem;'>Something went wrong. Try again!</p>";
                    }
                    else if ($_GET["error"] == "usernametaken"){
                        echo "<p class='alert alert-warning mx-auto text-center' style='width:30rem;'>Username already taken!</p>";
                    }
                    else if ($_GET["error"] == "none"){
                        echo "<p class='alert alert-success mx-auto text-center' style='width:30rem;'>You have signed up!</p>";
                    }
                }
            ?>
        </section>

<?php
    include_once 'footer.php';
?>