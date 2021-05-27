<table border="1" width="100%">
	<tr>
	<th>Job Name</th>
	<th>Company Name</th>
	<th>Result</th>
	<th> Date of Interview</th>
	</tr> 

<?php 
session_start();
$un=$_SESSION['username'];
$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");
  

$qry="SELECT * FROM `stureg_tbl` WHERE `userName`='$un'";
//echo $qry;
$recset=mysqli_query($con,$qry);
while ($row=mysqli_fetch_array($recset))
{
	
    ?>
	
    <tr>
    <td style="color:white" ><?php echo $row["JobName"];?> </td>
    <td style="color:white"><?php echo $row["Company name"];?> </td>
   

    <td style="color:white"><?php echo $row["result"];?> </td>
    <td style="color:white"><?php echo $row["InterviewDate"];?> </td>

<?php
}
?>
</table>
