<?php
session_start();
include("../config.php");
if(isset($_POST['login']))
{
	$userName = secure($_POST['username'], $mysqli);
	$pass =  secure($_POST['password'], $mysqli);
	$q = "SELECT * FROM users WHERE username = '$userName' AND user_pass = '$pass'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['userName'] = $userName;
			$_SESSION['loggedin'] = true;
			$row = $res->fetch_assoc();
			$_SESSION['users_id'] = $row['users_id'];
			$_SESSION['groupID'] = $row['title_id'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			$_SESSION['address'] = $row['address'];
			if($_SESSION['groupID'] < 2){
			echo    "<script>
                            alert('Welcome');
                        </script>";
			header("Location:../../index.php");
			exit;
			}else{
				echo    "<script>
                            alert('Welcome');
                        </script>";
			header("Location:../../admin.php");
			exit;
			}
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