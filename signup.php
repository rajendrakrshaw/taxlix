<?php
    ob_start();
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "taxlix");
    // $conn = mysqli_connect("sql207.epizy.com", "epiz_31860883", "AVfl0bjU2FPuOGv", "taxlix");
    if(isset($_GET['signup'])) {
        $email = $_GET['email'];
        $q = "SELECT `email` FROM `signup`";
        $emails = mysqli_query($conn, $q);
        $emails = $emails->fetch_array();
        $_SESSION['notRegistered'] = true;
        foreach($emails as $mail){
            // echo "hhello";
            // echo $mail;

            if($email == $mail) {
                $_SESSION['notRegistered'] = false;
                break;
            }
        }
        if(!$_SESSION['notRegistered']){
            echo '<script> alert("Email Already Registered! Please Go To Login Section.") </script>';
            // header("refresh:1;url=https://taxlix.epizy.com/login_form.php");
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $_GET['pass'];
            include "datamail.php";
            
            // echo "mail will be send";
        }
    }
    
?>