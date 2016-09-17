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
	$formatted_date = date('Y-m-d', strtotime($date));
	$sql = "INSERT INTO users (title_id,username,user_pass,gender,email,birthdate,fname,lname,address,)
VALUES ('1','$userName','$password','$gender','$eMail','$formatted_date','$firstName','$lastName','$address)";

if ($mysqli->query($sql) === TRUE) {
    echo "Account Successfully Created";
} else {
   	echo    "<script>
                            alert('Username Already in Use');
                            window.location.href='../../index.php';
                        </script>";
			exit;
}
}





?>