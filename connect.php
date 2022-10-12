<?php
$servername = "localhost";
$user = "root";
$password = "Shalini@123";
$dbname = "student";

// Create connection
$mysqli = new mysqli($servername, $user, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

//$SITEROOT = "//". $_SERVER['SERVER_NAME'] ;
$SITEROOT = "//". $_SERVER['SERVER_NAME'] ."";

ini_set("display_errors", 0);

?>