<?php
    ob_start();
    session_start();
    // $conn = mysqli_connect("localhost", "root", "", "taxlix");
    $conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");

    // $conn = mysqli_connect("sql207.epizy.com", "epiz_31860883", "AVfl0bjU2FPuOGv", "epiz_31860883_taxlix");
    if(isset($_GET['signup'])) {
        $email = $_GET['email'];
        $password = $_GET['pass'];
        $q = "SELECT `email` FROM `signup`";
        $emails = mysqli_query($conn, $q);
        $emails = $emails->fetch_array();
        // print_r( $emails);
        // echo $emails['mailforrahul01@gmail.com']['status'];
        $_SESSION['Registered'] = false;
        foreach($emails as $mail){
            // echo "hhello";
            // echo $mail;

            if($email == $mail) {
                $q = "SELECT `status` FROM `signup` WHERE `email` = '$mail'";
                $status = mysqli_fetch_assoc(mysqli_connect($conn, $q));
                echo '<h1>'.$status.'</h1>';
                if($status == 1) {
                    $_SESSION['Registered'] = true;
                    break;
                }
            }
        }
        if($_SESSION['Registered']){
            echo '<script> alert("Email Already Registered! Please Go To Login Section.") </script>';
            // header("refresh:1;url=https://rajendrakrshaw.rf.gd/login_form.php");
        }
        else{
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            
            include "datamail.php";
            
            // echo "mail will be send";
        }
    }
    
?>