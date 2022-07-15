<?php session_start();

$_SESSION['logged'] = false;
 

if (isset($_POST['login']))
{
	$username = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['pass']);
	
	$query 		= mysqli_query($con, "SELECT * FROM signup WHERE  password='$password' and email='$username'");
	$row		= mysqli_fetch_array($query);
	$num_row 	= mysqli_num_rows($query);
	
	if ($num_row > 0) 
		{			
			// $_SESSION['user_id']=$row['user_id'];
			$_SESSION['logged'] = true;
			$_SESSION['user'] = $row;
			header('location:home.php');
			
		}
	else
		{
			echo 'Invalid Username and Password Combination';
		}
}
?>
