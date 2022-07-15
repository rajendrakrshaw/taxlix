
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css" >

</head>
<body>
<div class="form-wrapper">
  
  <form action="verification.php" method="post">
    <h3>Verify Your Email</h3>
	  
    <div class="form-item">
		<input type="number" name="otp" placeholder="enter otp" autofocus required>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Verify Email"  value="Verify">
    </div>
  </form>
  
</body>
</html>