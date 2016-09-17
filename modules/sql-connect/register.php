<?php
session_start();
include("../config.php");
if(isset($_POST['register']))
{
	$firstName = secure($_POST['fname'], $mysqli);
	$lastName = secure($_POST['lname'], $mysqli);
	$eMail = secure($_POST['email'], $mysqli);

	$userName = secure($_POST['crt_uname'], $mysqli);
	$password = secure($_POST['crt_pass'], $mysqli);
	$date = secure($_POST['date'], $mysqli);
	$gender = secure($_POST['gender'], $mysqli);
	$address=secure($_POST['address'], $mysqli);
	echo $date;
	

}





?>