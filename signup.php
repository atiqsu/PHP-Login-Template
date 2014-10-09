<?php
  ob_start();
  session_start();
  if( !isset($_SESSION['user_nick']) || !isset($_SESSION['user_email']) || !isset($_SESSION['user_name']) )
  {
	echo " 
		<html>
      <head>
		    <title>Sign Up</title>
		    <link href='css/bootstrap.min.css' rel='stylesheet'>
		    <link href='css/styles.css' rel='stylesheet'>
    	</head>

      <body style='background-image:url(./images/iiitd2.jpg); background-size: cover;'>

        <div id='loginModal' class='modal show' tabindex='-1' role='dialog' aria-hidden='true' style = '
  position: relative;
  top: 60%;
  transform: translateY(-50%);'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <h3 style = 'text-align:center'><span STYLE='font-family: Bodoni MT Ultra Bold;'>SIGN UP</span></h3>
              </div>
            <div class='modal-body'>

              <form class='form col-md-12 center-block' action = 'signup.php' method = 'POST'>
                <div class='form-group'>
                  <input type='text' class='form-control input-lg' name = 'signup_username' placeholder = 'Username' autocomplete = 'off'>
                </div>
                <div class='form-group'>
                  <input type='text' class='form-control input-lg' name = 'signup_nickname' placeholder = 'Nickname' autocomplete = 'off'>
                </div>
                <div class='form-group'>
                  <input type='text' class='form-control input-lg' name = 'signup_email' placeholder = 'Email' autocomplete = 'off'>
                </div>
                <div class='form-group'>
                  <input type='password' class='form-control input-lg' name = 'signup_password' placeholder = 'Password' autocomplete = 'off'>
                </div>
                <div class='form-group'> 
                  <button class='btn btn-primary btn-lg btn-block' name = 'register'>Register</button>
                </div>
              </form>
            </div>
            <div class='modal-footer'>
	          </div>
          </div>
        </div>
      </div>

	<!-- script references -->
		<script src='js/jquery.js'></script>
		<script src='js/bootstrap.js'></script>
      </body>
    </html>
	";

	if (isset($_POST['register']))
	{

		$con = mysql_connect("127.0.0.1", "root","kush@1996");
		mysql_select_db("learning",$con);
		$q1 = "INSERT INTO signup (username,password,nickname,email,role) VALUES ('$_POST[signup_username]','$_POST[signup_password]','$_POST[signup_nickname]','$_POST[signup_email]','1')";		
		if (mysql_query($q1,$con))
		{
			header("Location: index.php");
		}
	}
  }
  else
  {
    header("Location: home.php");
  }


?>