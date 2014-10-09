<?php 
  session_start();
  if ($_SESSION['state']== 'valid')
  {
    $_SESSION['message'] = "WELCOME<br>";
  }

  if( !isset($_SESSION['user_nick']) || !isset($_SESSION['user_email']) || !isset($_SESSION['user_name']) )
  {


echo "

<html >
	<head>
		<title>Login</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/styles.css' rel='stylesheet'>
    <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>

	</head>
  <body style='background-image:url(./images/iiitd2.jpg); background-size: cover;'>

  <!--login modal-->

    <div id='loginModal' class='modal show' tabindex='-1' role='dialog' aria-hidden='true' style = '
  position: relative;
  top: 60%;
  transform: translateY(-50%);'>

      <div class='modal-dialog'>

        <div class='modal-content'>
              <div id='test'>
                <h3 style = 'text-align:center'><span STYLE='font-family: Bodoni MT Ultra Bold;'>".$_SESSION['message']."<br>"."</span></h3>";
                $_SESSION['state'] = 'valid';
                echo "
              <div class = 'col-md-6'>
               <button class='btn btn-primary btn-lg btn-block' id = 'click_signin'>Sign In</button>
               </div>
               <div class = 'col-md-6'>
               <button class='btn btn-primary btn-lg btn-block'  id = 'click_contact' >Contact</button>
               </div>
              </div>
            <div>

            </div>
          <div class='modal-body' id='theform' style='display:none'>
         <h3 style = 'text-align:center'><span STYLE='font-family: Bodoni MT Ultra Bold;'>LOG IN</span></h3>
            <form class='form col-md-12 center-block' action = 'redirecting.php' method = 'POST'>
              <div class='form-group'>
                <input type='text' class='form-control input-lg' name = 'signin_email' placeholder = 'Email' autocomplete='off'>
              </div>
              <div class='form-group'>
                <input type='password' class='form-control input-lg' name = 'signin_password' placeholder = 'Password' autocomplete='off'>
              </div>
              <div class='form-group'> 
                <div class = 'row'>
                  <div class = 'col-md-6'>
                    <button class='btn btn-primary btn-lg btn-block' name = 'signin' >Sign In</button>
                  </div>
                  <div class = 'col-md-6'>
                    <button class='btn btn-primary btn-lg btn-block' name = 'signup'>Sign Up</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class='modal-body' id='contact' style='text-align:center; display:none'>

          <br><br>
            <div class = 'row'>
            <div class = 'col-md-4'>
            <a href='mailto:singh.kushagra.1996@gmail.com'>
            <img src = './images/mail.jpg' height='100' width='100'>
            </a>
            </div>
            <div class = 'col-md-4'>
            <a href = 'https://www.github.com/kush789'>
            <img src = './images/git.jpg' height='100' width='100'>
            </a>
            </div>
            <div class = 'col-md-4'>
            <a href = 'https://www.facebook.com/kushagra1996'>
            <img src = './images/fb.jpg' height='100' width='100'>
            </a>
            </div>
            </div>
          </div>
          <div class='modal-footer'>
          </div>
        </div>
      </div>
    </div>
	<!-- script references -->

  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script> 
  <script src='js/jquery.min.js'></script>
  <script src='js/bootstrap.min.js'></script>

  <script>
  $(document).ready(function() {
            $('#click_signin').click(function(e){    
            $('#test').fadeOut('slow', function(){ $('#theform').fadeIn('slow'); });
            });
          });
  $(document).ready(function() {
            $('#click_contact').click(function(e){    
            $('#test').fadeOut('slow', function(){ $('#contact').fadeIn('slow'); });
            });
          });
</script>
  
</body>
</html>
";
}
else
{
  header("Location: home.php");
}

?>