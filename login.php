<?php session_start();

$_SESSION['logged'] = false;
$conn = mysqli_connect("sql301.epizy.com", "epiz_32169318", "eyU7s1A71XX", "epiz_32169318_taxlix");


if (isset($_POST['login']))
{
	$username = $_POST['email'];
	$password = $_POST['pass'];
	
	$query = mysqli_query($conn, "SELECT * FROM `signup` WHERE `password`='$password' and `email`='$username'");
	$row = $query->fetch_array();
	$num_row = mysqli_num_rows($query);
	
	if ($num_row > 0) 
		{			
			// $_SESSION['user_id']=$row['user_id'];
			$_SESSION['logged'] = false;
			$_SESSION['user'] = $row;
			header('location:client/dashboard.php');
            // header("url=https://taxlix.epizy.com/client/dashboard.php");

			
		}
	else
		{
			echo 'Invalid Username and Password Combination';
		}
}
?>
