<?php
	
	ob_start();
	session_start();

	if (isset($_POST['signin']))
	{			
		$found = 0;

		$con = mysql_connect("127.0.0.1","root","kush@1996");
		mysql_select_db("learning",$con);
		$q1 = "SELECT * FROM signup WHERE email LIKE '$_POST[signin_email]' ";
		$data = mysql_query($q1,$con);

		while( $row = mysql_fetch_array($data))
		{
			if ($row['password'] == $_POST['signin_password'])
			{
				session_regenerate_id();
				$_SESSION['user_nick'] = $row['nickname'];
				$_SESSION['user_email'] = $row['email'];
				$_SESSION['user_name'] = $row['username'];
				$_SESSION['message'] = "";
				session_write_close();
				$found=1;
				$_SESSION['stata'] = 'valid';
				header("Location: home.php");
			}
		}

		if (!$found)
		{

			$_SESSION['message'] = "Wrong user Name or Password";
			$_SESSION['state'] = 'invalid';

			header("Location: index.php");
		}


	}

	else if (isset($_POST['signup']))
	{
		header("Location: signup.php");
 	}

 	else
 	{
		header("Location: index1.php");
 	}

?>




