<?php
// session_start();
if($_SESSION['notRegistered']){
include "smtp/class.phpmailer.php"; // include the class file name
    //$email = "mailforrahul01@gmail.com";
    // echo($email);
    // $_SESSION['email'] = $email;
    $otp = rand(111111,999999);
   // $queryy = "UPDATE `verification_data` SET `otp`='$otp' WHERE email='$email'";
  //  mysqli_query($conn, $queryy);
    $mail = new PHPMailer; // call the class
    //$mail->SMTPDebug = 3;
    $mail->IsSMTP();
    $mail->Host = "smtp.office365.com"; //Hostname of the mail server
    $mail->Port = 587; //Port of the SMTP like to be 25, 80, 465 or 587
    $mail->SMTPAuth = true; //Whether to use SMTP authentication
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Username = "bbcoders@outlook.com"; //Username for SMTP authentication any valid email created in your domain
    $mail->Password = "Rahul@2001"; //Password for SMTP authentication
    $mail->AddReplyTo("bbcoders@outlook.com", "BB Coders"); //reply-to address
    $mail->SetFrom("bbcoders@outlook.com", "BB Coders"); //From address of the mail
    // put your while loop here like below,
    $mail->Subject = "Your One Time Password is"; //Subject od your mail
    $mail->AddAddress($email, ""); //To address who will receive this email
    $mail->MsgHTML("<b>Your otp is <h1>".$otp."</h1> <br/><br/>by <a href='http://taxlix.rf.gd'>taxlix</a></b>"); //Put your body of the message you can place html code here
    //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
    $send = $mail->Send(); //Send the mails
    if($send){
        echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
        include "verify_email.php";
    }
    else{
        echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
    }
}
?>

        