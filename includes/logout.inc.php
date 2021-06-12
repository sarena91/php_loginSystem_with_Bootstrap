<?php
//destroy all session variables
session_start();
session_unset();
session_destroy();

//re-direct to index page
header("location: ../index.php");
exit();