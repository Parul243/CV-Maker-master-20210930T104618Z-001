<?php
$server = "localhost";
$dbname = "cv_project";
$dbuser = "root";
$dbpass = "password";

$con = mysqli_connect($server, $dbuser, $dbpass, $dbname);
if (!$con)
{
	die('Could not connect: ' . mysqli_error());
}
?>