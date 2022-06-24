<?php 
    session_start();
    $conn = mysqli_connect("sql207.epizy.com", "epiz_31860883", "AVfl0bjU2FPuOGv", "epiz_31860883_taxlix");
    if(int($SESSION['otp']) == int($_POST['otp'])){
      $q = "INSERT INTO `signup`(`email`, `password`, `otp`, `status`) VALUES ('$email','$password','$otp','1')";
      $query = mysqli_query($conn, $q);
      
      echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
     
      header("refresh:1;url=http://taxlix.rf.gd/login_form.php");
      

    }
    else{
      echo '<script> alert("Invalid OTP! OTP sent again.") </script>';
      header("refresh:1;url=http://taxlix.rf.gd/verify_email.php");
    }

  ?>