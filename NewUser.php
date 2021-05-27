
<html> 
<style>
label{
color:white;

}</style> 
<body>  
<form method = "post" action="saveuser.php">   
<table align="center" border="1" width="70%">

	<th colspan="2"> Add a New User</th>
	
	<tr>
	<td><div class="labl">User Name: </div></td>
	<td><input type="string" name="username" ></td>
	</tr>
	<tr>
	<td><div class="labl">Password: </div></td>
	<td><input type="password" name="password" ></td>
	</tr>
	<tr>
	<td><div class="labl">User Type: </div>

	<td><input type="radio" name="userType" value="admin" id="1" title="Admin"><label for="usertype">Admin</label></td>
	<br>
	<td><input type="radio" name="userType" value="student" id="2" title="Student"><label for="usertype">Student </label></td>
	
	
	</td>
	</tr>
	<td><div class="labl">StuID: </div></td>
	<td><input type="string" name="StuID"></td>
	</tr>
	<tr>
	<th colspan="2" style="background-color:#0055CC;" > <input type = "submit" name = "submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;" >	</th>
</table> 
  
</form>     
</body>   
</html>