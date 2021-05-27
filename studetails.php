
<html>  
<body>  
<form method = "post" action="saveStu.php">   
<table align="center"  width="70%" height="60%">

	<th colspan="2"> Add Your Details	</th>
	<tr>
	<td><div class="labl">StudentID/Roll No: </div></td>
	<td><input type="string" name="rollno"></td> 
	</tr>
	<tr>
	<td><div class="labl">Name: </div></td>
	<td><input type="string" name="stuname"></td>
	</tr>
	<tr>
	<td><div class="labl">Father's Name: </div></td>
	<td><input type="string" name="fname" ></td>
	</tr>
	<tr>
	<td><div class="labl">Date of Birth: </div></td>
	<td><input type="date" name="dob" value=<?php echo date('Y-m-d H:i:s');?></td> 
	</tr>	
	<tr>
	<td><div class="labl">Contact Number: </div></td>
	<td><input type="string" name="contno" ></td>
	</tr>
	<tr>
	<td><div class="labl">Email ID: </div></td>
	<td><input type="string" name="email" ></td>
	</tr>
	<tr>
	<td><div class="labl">Stream: </div></td>
	<td>	<select name="strm">
			  <option value="Comp Science">Computer Science</option>
			  <option value="Science">Science</option>
			  <option value="Commerce">Commerce</option>
			  <option value="Business Administration">Business Administration</option>
			  <option value="Arts">Arts</option>
			</select>
	</td></tr>
	<tr>
	<td><div class="labl">Course: </div></td>
	<td><select name="course">
			  <option value="BCA">BCA</option>
			  <option value="B.Sc.">B.Sc.</option>
			  <option value="PGDCA">PGDCA</option>
			  <option value="PGDMC">PGDMC</option>
			  <option value="BBA">BBA</option>
			  <option value="BCOM">BCOM</option>
			  <option value="BA">BA</option>
			  <option value="MCOM">MCOM</option>
			  <option value="M.Sc.">M.Sc.</option>
			</select>
	</td></tr>
	
	<td><div class="labl">last Score in %age: </div></td>
	<td><input type="float" name="score"> </td>
	</tr>
	<tr>
	<td><div class="labl">Area of Interest: </div></td>
	<td><input type="string" name="AreaInt" > </td>
	</tr>
	<th colspan="2"> Apply for a Job</th>
	
	<tr>
	<td><div class="labl">Job: </div></td>
	<td>	
	<?php
	$con=mysqli_connect("remotemysql.com","Bvi6TRjeoH","aD13zcazgh","Bvi6TRjeoH");
	$qry="select JobID, JobDesc,CompanyName from placement_tbl";
	$run=mysqli_query($con,$qry);
	echo '<select name="jid">';
	while ($rows=mysqli_fetch_array($run))
	{
		
		echo "<option value=".$rows['JobID'].">".$rows['JobDesc']."</option>";
		
	}
	?>
				  
	</td>
	</tr>

	<th  colspan="2"> <input type = "submit" name = "submit" value="Save Details" style=" font-size:16px;font-weight:bold; padding:15px; text-shadow: 2px 2px 4px orange;" ></th>
</table> 
  
</form>     
</body>   
</html>  
