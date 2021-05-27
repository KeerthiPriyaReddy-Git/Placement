
<?php 
session_start();
$un=$_SESSION['username'];  
if(isset($_POST['submit']))  
{   

	$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");

if (!empty(	$_POST["rollno"]) and !empty($_POST["stuname"]))
{
$rno=(integer)$_POST["rollno"];
$snam=$_POST["stuname"];
$fnam=$_POST["fname"];
$dob=$_POST["dob"];
$ph=$_POST["contno"];
$email=$_POST["email"];
$strm=$_POST["strm"];
$cors=$_POST["course"];
$scor=(float)$_POST["score"];
$areaInt=$_POST["AreaInt"];
$appjob=$_POST["jid"];
$qry="select * from `placement_tbl` where `JobID`='$appjob'";
$result=mysqli_query($con,$qry);
$rwo=mysqli_fetch_assoc($result);
$x=$rwo['JobDesc'];
$y=$rwo['CompanyName'];
$inter=$rwo['InterviewDate'];
$qry="INSERT INTO `stureg_tbl` (`userName`, `StuID`, `StuName`, `StuFName`, `StuDOB`, `ContactNo`, `StuEmail`, `Stream`, `Course`, `LastScore`, `AreaOfInterest`, `JobID`, `JobName`, `Company name`, `result`, `InterviewDate`) VALUES
('$un','$rno','$snam','$fnam','$dob','$ph','$email','$strm','$cors','$scor','$areaInt','$appjob','$x','$y',' ','$inter')";
$x=mysqli_query($con,$qry);
	
	if ($x)
	{
		
		echo "<script>alert('Data saved');</script>";
		header('refresh:0;url=https://placementsystem.herokuapp.com/studash.php?uname='.$un);
	}		
else
{
	
	echo "<script>alert('could not save data');</script>";
			header('refresh:0;url=https://placementsystem.herokuapp.com/studash.php?uname='.$un);
}
}
else
{
	echo "<script>alert('fields cannot be left empty');</script>";
			header('refresh:0;url=https://placementsystem.herokuapp.com/studash.php?uname='.$un);
}
}
?>
