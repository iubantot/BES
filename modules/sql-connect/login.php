<?php
session_start();
include("../config.php");
if(isset($_POST['login']))
{
	$userName = secure($_POST['username'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);
	echo $userName;
	$q = "SELECT * FROM users WHERE username = '$userName' AND user_pass = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['userName'] = $userName;
			$_SESSION['loggedin'] = true;
			$row = $res->fetch_assoc();
			$_SESSION['users_id'] = $row['users_id'];
			$_SESSION['groupID'] = $row['group_id'];

			echo $_SESSION['userName'];
			echo    "<script>
                            alert('Welcome');
                        </script>";
			header("Location:../../index.php");
			exit;
		}
		else
		{
			echo    "<script>
                            alert('Incorrect Username/Password!');
                            window.location.href='../../index.php';
                        </script>";
			exit;
		}
	}
}





?>