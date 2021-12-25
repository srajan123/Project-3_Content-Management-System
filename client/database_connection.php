<?php 
session_start();
$timezone=date_default_timezone_set("Asia/Kolkata");
$dbhost="localhost";
$dbuser="1121512";
$dbpassword="srajanjain";
$dbname="1121512";
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if (mysqli_connect_errno())
 {
       echo "failed to connect:".mysqli_connect_errno();
}