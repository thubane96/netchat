<?php
ob_start(); //Turns on output buffering 
session_start();

$server = "	sql207.epizy.com";
$username = "epiz_27266003";
$password = "z3hhUhakUuaKNC";
$dbname = "epiz_27266003_social";

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect($server, $username, $password, $dbname); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>