<form method="get" >
<?php
  $conn=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");

$sql = "SELECT `password` from `users` where username='".$_POST["uname"]."'";
$un=$_POST["uname"];
$retval = mysqli_query( $conn, $sql  );

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) 
{
	if ($row['password']==$_POST["pwd"])
	{
      echo "login successful<br> ";
	  session_start();
	  $_SESSION['username']=$un;
	  if ($_POST['usertype']=="S")
			header('refresh:0;url=https://placementsystem.herokuapp.com/studash.php?uname='.$un);
	  else
			header('refresh:0;url=https://placementsystem.herokuapp.com/admdash.php?uname='.$un);
	 }
	else
	{
		echo "<script>alert('username or password incorrect');</script>";
		if ($_POST['usertype']=="S")
				header('refresh:0;url=https://placementsystem.herokuapp.com/stulogin.php');
	  else
			header('refresh:0;url=https://placementsystem.herokuapp.com/adminlogin.php');
	}
   } 
   
?>
</form>
