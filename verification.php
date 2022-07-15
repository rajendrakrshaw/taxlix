<?php 
    session_start();
    $conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");
    echo $SESSION['otp']." ".$_POST['otp'];
    if(int($SESSION['otp']) == int($_POST['otp'])){
      echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';

      // $q = "INSERT INTO `signup`(`email`, `password`, `otp`, `status`) VALUES ('$email','$password','$otp','1')";
      // $query = mysqli_query($conn, $q);
      
      // echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
     
      // header("refresh:1;url=http://taxlix.com/login_form.php");
      

    }
    else{
      echo '<script> alert("Invalid OTP! OTP sent again.") </script>';
      header("refresh:1;url=http://taxlix.com/verify_email.php");
    }

  ?>