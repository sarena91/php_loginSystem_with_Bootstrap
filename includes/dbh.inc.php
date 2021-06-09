<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystemproject";

$conn = mysqli_connect($serverName, $dBUsername,$dBPassword, $dBName);

if(!$conn){
    //error message
    die("Connection failed: " . mysqli_connect_error());
}