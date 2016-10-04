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
	//echo $date;
	$formatted_date = date('Y-m-d', strtotime($date));
	
$q = "SELECT username,email FROM users WHERE username = '$userName' OR email = '$eMail'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			echo    "<script>
                            alert('Username/email already in Use');
                            window.location.href='../../index.php';
                        </script>";
		}
		else
		{
			$sql = "INSERT INTO users (title_id,username,user_pass,gender,email,birthdate,fname,lname,address)
			VALUES ('0','$userName','$password','$gender','$eMail','$formatted_date','$firstName','$lastName','$address')";
							if ($mysqli->query($sql) === TRUE) {
			   echo    "<script>
										alert('Account Successfully Created!!');
										window.location.href='../../index.php';
									</script>";
				
			} else {  
						   echo    "<script>
										alert('Username already in Use');
										window.location.href='../../index.php';
									</script>";
						exit;
					}
		}
	}
}
?>