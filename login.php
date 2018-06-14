<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) 
       
        {
		header('Location: index.php');
		exit();
	  }
	  	//Change the url according to you location.
	
    $redirectURL = "http://localhost/project3/fbcallback.php";
	$permissions = ['email'];
	
     $loginURL = $helper->getLoginUrl($redirectURL,      $permissions);

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SSS Assignment 03</title>
  <script type="text/javascript" src="config.js"> </script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="login-page">
  <div class="form">

    <form class="login-form">
      <input type="text" placeholder="email" name="email"/>
	<input type="password" placeholder="password" name="pass"/>
	<button name="submit" onclick="loginAlert()">login</button>

	<img src="images/facebook.png " style="align:center" onclick="window.location = '<?php echo $loginURL ?>';" height="85" class="fbcontainer" style="margin-left: 70px">

      <p class="message">Done by: <a href="#">Bharath Thivagaren</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>

<script>
function loginAlert() {
    alert("Login failed. Sign up using Facebook");
}
</script>
</body>
</html>
