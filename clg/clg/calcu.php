<?php
	session_start();
	error_reporting(E_ALL);
	$db= mysqli_connect("localhost","root","","mydb");

	if(isset($_POST['reg_btn']))
	{
		//$id= $_POST['id'];
		$renum= $_POST['renum'];
		$days= $_POST['days'];
		$renu=$days*$renum;
		$allowance= $_POST['allowance'];
		$username=$_SESSION['username'];
		$pay=$renu+$allowance;
		$sql = "UPDATE vals SET renum='$renu',days='$day',allowance='$allowance',pay='$pay' WHERE username='$username'";
		//$sql="INSERT INTO Persons (FirstName, LastName, Age) VALUES ('$firstname', '$lastname', '$age')";
		mysqli_query($db,$sql);
		//header("location: .php");
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
</head>
<body>
	<center>
			<div class="div4">
				<form  method="POST" action="userfunction.php">
						<table border="0" width="500" align="center" class="demo-table">
						<tr>
							<td colspan=2><h2 align="center"> Calculation </h2></td>
						</tr>
						<!--<tr>
							<td>Total Number of Scripts Valued</td>
							<td><input type="text" name="tots" required="required" class="demoInputBox"></td>
						</tr>-->
						<tr>
							<td>Renumeration</td>
							<td><input type="number" name="renum" required="required" class="demoInputBox"></td>
						</tr>
						<tr>
							<td>Number of Days Allowed</td>
							<td><input type="number" name="days" required="required" class="demoInputBox"></td>
						</tr>
						<tr>
							<td>LA/TA & DA</td>
							<td><input type="number" name="allowance" required="required" class="demoInputBox">
    						</td>
						</tr>
						<tr>
							<td colspan=2>
							<input type="submit" value="Submit" name="reg_btn" class="btnRegister" style="width:100px;"></td>
						</tr>
					</table>
				</form>
			</div>
		</center>		
</body>
</html>