<?php
    ob_start();
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "taxlix");
    
    if(isset($_GET['signup'])) {
        $email = $_GET['email'];
        $q = "SELECT `email` FROM `signup`";
        $emails = mysqli_query($conn, $q);
        $emails = $emails->fetch_array();
        $found = false;
        foreach($emails as $mail){
            // echo "hhello";
            // echo $mail;

            if($email == $mail) {
               
                $found = true;
                break;
            }
        }
        if($found){
            echo '<script> alert("Email Already Registered! Please Go To Login Section.") </script>';
            // header("refresh:1;url=https://taxlix.epizy.com/login_form.php");
        }
        else{
            $_SESSION['password'] = $_GET['pass'];
            include "verify_email.php";
            // echo "mail will be send";
        }
    }
    
?>