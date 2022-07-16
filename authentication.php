<?php 
    session_start();
    $conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");
    // echo $_SESSION['otp'];
    $otp = $_POST['otp'];
    // $email =  $_SESSION['email'];
    // $password = $_SESSION['password'];

    if($_SESSION['otp'] == $_POST['otp']){
      // echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
        include "new_password.php";
    //   $q = "INSERT INTO `signup`(`email`, `password`, `otp`, `status`) VALUES ('$email','$password','$otp','1')";
    //   $query = mysqli_query($conn, $q);
    //   // $q = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
    //   echo '<script> alert("Registered Successfully! Please Go To Login Section.") </script>';
    //   session_abort();
    //   header("refresh:1;url=http://taxlix.com/login_form.php");
      

    }
    else{
      echo '<script> alert("Invalid OTP! OTP sent again.") </script>';
      header("refresh:1;url=http://rajendrakrshaw.rf.gd/otp_form.php");
    }

  ?>