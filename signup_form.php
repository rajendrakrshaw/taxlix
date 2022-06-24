<?php session_start(); ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/login.css" >

</head>
<body>
<div class="form-wrapper">
  
  <form action="signup.php">
    <h3>Sign Up Here</h3>
	
    <div class="form-item">
		<input type="text" name="email" required placeholder="abc@xyz.com" autofocus required>
    </div>
    
    <div class="form-item">
        <input 
            id="pass"
            type="password"
            name="pass"
            placeholder="Enter Password"
            required
        >
    </div>
    <div class="form-item">
        <input 
            id="confirm_pass"
            type="password"
            name="confirm_pass"
            placeholder="Confirm Password"
            required
            onkeyup="validate_password()"
        >
    </div>
    <span id="wrong_pass_alert"></span>
    <div class="button-panel">
		<input type="submit" class="button" title="Sign Up" name="signup" value="Signup" id="create" onclick="wrong_pass_alert()">
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:home.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  <div class="reminder">
    <p><a href="login.php">Login here</a></p>
  </div>
  
</div>
<script>
        function validate_password() {
 
            var pass = document.getElementById('pass').value;
            var confirm_pass = document.getElementById('confirm_pass').value;
            if (pass != confirm_pass) {
                document.getElementById('wrong_pass_alert').style.color = 'red';
                document.getElementById('wrong_pass_alert').innerHTML
                  = '☒ Use same password';
                document.getElementById('create').disabled = true;
                document.getElementById('create').style.opacity = (0.4);
            } else {
                document.getElementById('wrong_pass_alert').style.color = 'green';
                document.getElementById('wrong_pass_alert').innerHTML =
                    '🗹 Password Matched';
                document.getElementById('create').disabled = false;
                document.getElementById('create').style.opacity = (1);
            }
        }
 
        function wrong_pass_alert() {
            if (document.getElementById('pass').value != "" &&
                document.getElementById('confirm_pass').value != "") {
                alert("Your response is submitted");
            } else {
                alert("Please fill all the fields");
            }
        }
    </script>

</body>
</html>