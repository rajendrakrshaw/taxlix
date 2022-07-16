<?php session_start(); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="otp.php" method="post">
    <h3>Enter Your Email</h3>
	
    <div class="form-item">
		<input type="text" name="email" required="required" placeholder="Email" autofocus required></input>
    </div>
    <div class="button-panel">
		<input type="submit" class="button" title="Get OTP" name="login" value="Get OTP"></input>
    </div>
  </form>
 
  
</div>

</body>
</html>