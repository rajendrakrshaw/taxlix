
<?php
    session_start();
    $conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");

if (isset($_POST['reset']))
{
    $email = $_SESSION['email'];
    $password = $_POST['pass'];
    // echo $password;
    $q = "UPDATE `signup` SET `password`='$password' WHERE `email` = '$email'";
    mysqli_query($conn, $q);
    echo '<script> alert("Password Reset Successfully!")</script>';
    header("refresh:1;url=http://rajendrakrshaw.rf.gd/login_form.php");
    
}
?>