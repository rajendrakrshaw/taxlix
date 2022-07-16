<?php 
    session_start();
    $conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");
    // echo $_SESSION['otp'];
    $otp = $_POST['otp'];
    // $email =  $_SESSION['email'];
    // $password = $_SESSION['password'];

    if($_SESSION['otp'] == $_POST['otp']){
      // echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
    
      ?>
      
      <html>
      <head>
      <link rel="stylesheet" type="text/css" href="css/login.css" >
      
      </head>
      <body>
      <div class="form-wrapper">
        
        <form action="" method="get" >
          <h3>Reset Password</h3>
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
              <input type="submit" class="button" title="Reset Password" name="reset" value="Reset" id="create" onclick="wrong_pass_alert()">
          </div>
        </form>
        <?php
          if (isset($_GET['reset']))
              {
                  echo "hello";
                  $password = $_GET['pass'];
                  $q = "UPDATE `signup` SET `password`='$password' WHERE `email` = '$email'";
                  mysqli_query($conn, $q);
                  echo '<script> alert("Password Reset Successfully!")</script>';
                  header("refresh:1;url=http://rajendrakrshaw.rf.gd/login_form.php");
                  
              }
         
        ?>
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
      <?php
    //   $q = "INSERT INTO `signup`(`email`, `password`, `otp`, `status`) VALUES ('$email','$password','$otp','1')";
    //   $query = mysqli_query($conn, $q);
    //   // $q = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
    //   echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
    //   session_abort();
    //   header("refresh:1;url=http://taxlix.com/login_form.php");
    }
    else if($_SESSION['otp'] != $otp){
      echo '<script> alert("Invalid OTP! OTP sent again.") </script>';
      header("refresh:1;url=http://rajendrakrshaw.rf.gd/otp_form.php");
    }

  ?>