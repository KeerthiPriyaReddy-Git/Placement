
<?php 
$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");
session_start();
$sid=$_SESSION['username'];
echo $sid;
$jid=$_POST['jid'];
echo $jid;
$qyry="SELECT * from `stureg_tbl` where `userName`='$sid'";
$res=mysqli_query($con,$qyry);
$rro= $res->fetch_assoc();
$stuid=$rro['StuID'];
echo $stuid;
$stna=$rro['StuName'];
$stufn=$rro['StuFName'];
$studob=$rro['StuDOB'];
$Cont=$rro['ContactNo'];
$sem=$rro['StuEmail'];
$strem=$rro['Stream'];
$stre=$rro['Course'];
$scor=$rro["LastScore"];
$areaInt=$rro["AreaOfInterest"];
$qyre="SELECT * FROM `placement_tbl` WHERE `JobID`='$jid'";
$result=mysqli_query($con,$qyre);
if($result){
 echo "results found";
 $xyz=mysqli_fetch_assoc($result);
$c=$xyz['JobDesc'];
$v=$xyz['CompanyName'];
$inte=$xyz['InterviewDate'];
echo $c;
}
$qry="INSERT INTO `stureg_tbl`(`userName`, `StuID`, `StuName`, `StuFName`, `StuDOB`, `ContactNo`, `StuEmail`, `Stream`, `Course`, `LastScore`, `AreaOfInterest`, `JobID`, `JobName`, `Company name`, `InterviewDate`)VALUES ('$sid','$stuid','$stna','$stufn','$studob','$Cont','$sem','$strem','$stre','$scor','$areaInt','$jid','$c','$v','$inte')";
$qqq=mysqli_query($con,$qry);
if ($qqq)
	{
		
		echo "<script>alert('Data saved');</script>";
		header('refresh:0;url=https://placementsystem.herokuapp.com/studash.php');
	}		
else
{
	
	echo "<script>alert('could not save data');</script>";
	
}



?>
