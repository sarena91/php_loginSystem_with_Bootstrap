<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <title>PHP Login System</title>
</head>
<body>

<!-- NAVBAR CONTENT -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="./img/cartoonpencil.png" alt="Blog icon"> Blog</a>

        <div id="nav-links" class="ml-auto">
        <ul class="navbar-nav">
            <!-- add in active state for nav links -->
            <li class="nav-item mx-2">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Blogs</a>
            </li>
            
            <?php
            // check if user is logged in
                if(isset($_SESSION["useruid"])){
                    //if true, show profile and logout navs
                    // profile.php do not exist as yet
                    echo "<li class='nav-item mx-2'><a class='nav-link' href='profile.php'>Profile</a></li>";
                    echo "<li class='nav-item mx-2'><a class='nav-link' href='includes/logout.inc.php'>Log out</a></li>";
                }
                else {
                    //if user not logged in, show signup and login navs
                    echo "<li class='nav-item mx-2'><a class='nav-link' href='signup.php'>Sign up</a></li>";
                    echo "<li class='nav-item mx-2'><a class='nav-link' href='login.php'>Log in</a></li>";
                }
            ?>
        </ul>
        </div>
    </nav>
<!-- END OF NAVBAR CONTENT -->

<!-- CONTAINER FOR WEBSITE CONTENT -->
<div class="container">