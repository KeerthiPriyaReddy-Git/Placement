
<?php 
$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");
session_start();
$un=$_POST['username'];
$pwd=$_POST['password'];
$utype=$_POST['userType'];
$stuid=$_POST['StuID'];

$qry="Insert into users (username,password,usertype,StuID) values ('$un','$pwd','$utype','$stuid')" ;

	if (mysqli_query($con,$qry)==true)
	{
		
		echo "<script>alert('New User Created');</script>"; 
		header('refresh:0;url=https://placementsystem.herokuapp.com/admdash.php');
	}		
	else
	{
		echo "<script>alert('could not update password');</script>";
		header('refresh:0;url=https://placementsystem.herokuapp.com/admdash.php');
	}


?>
