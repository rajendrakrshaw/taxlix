
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css" >

</head>
<body>
<div class="form-wrapper">
  
  <form >
    <h3>Verify Your Email</h3>
	<?php echo  $otp; ?>
    <div class="form-item">
		<input type="text" name="otp" placeholder="enter otp" autofocus required>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Verify Email"  value="Verify">
    </div>
  </form>
  <?php 
    if($otp == $_GET['otp']){
      $q = "INSERT INTO `signup`(`email`, `password`, `otp`, `status`) VALUES ('$email','$password','$otp','1')";
      $query = mysqli_query($conn, $q);
      
      echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
     
      header("refresh:1;url=https://taxlix.rf.gd/login_form.php");
      

    }
    else{
      echo '<script> alert("Invalid OTP") </script>';
    }

  ?>
</body>
</html>