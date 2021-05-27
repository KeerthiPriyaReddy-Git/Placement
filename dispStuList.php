
<?php   
if(isset($_POST['submit']))  
{   

	$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");

	session_start();
    $jid= $_POST["jid"];

	$result = "SELECT * FROM `stureg_tbl` WHERE JobID='$jid'";
	$ret = mysqli_query( $con, $result);
    $num = mysqli_num_rows($ret);
            if($num> 0){
      ?> 
<html>
<body>
<link href="style.css" rel="stylesheet" type="text/css">
<div class="container4">
<table style="color:black;font-size:15px;" border="5px solid black;" align="center" cellpadding="10" cellspacing="10">

    <tr>
    
    <th>username  </th>
    <th>StudentID</th>
    <th>StudentName</th>
    <th>Dob</th>
    <th>Contact No </th>
    <th> Email </th>
    <th>stream  </th>
    <th>course</th>
    <th>lastscore</th>
    <th> Area of Interest</th>
    <form method="POST" action="up.php">
    </form>
    </tr>
    
    
  
    <?php 
    while($row = mysqli_fetch_assoc($ret))
    {
    ?>
    <tr>
    <td><?php echo $row["userName"];?> </td>
    <td><?php echo $row["StuID"];?> </td>
    <td><?php echo $row["StuName"];?> </td>
    <td><?php echo $row["StuDOB"];?> </td>
    <td><?php echo $row["ContactNo"];?> </td>
    <td><?php echo $row["StuEmail"];?> </td>
    <td><?php echo $row["Stream"];?> </td>
    <td><?php echo $row["Course"];?> </td>
    <td><?php echo $row["LastScore"];?> </td>
    <td><?php echo $row["AreaOfInterest"];?> </td>
    <td><a href="up.php?rid=<?php echo $row["StuID"];?>">QUALIFIED</a></td>
    <td><a href="up2.php?pid=<?php echo $row["StuID"];?>">DISQUALIFIED</a></td>
    </tr>
    </div>
    
   </body>
   </html>

    <?php
    }
    }else{
        ?>
        <h1>NO RESULTS FOUND</h1>
        <?php
    }
    }
?>

