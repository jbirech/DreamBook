<?php  
ob_start();// Turn on output buffering
session_start();

$timezone = date_default_timezone_set("America/los_Angeles");

$con = mysqli_connect("localhost", "root", "", "dream-book"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>