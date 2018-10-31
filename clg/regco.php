<?php session_start(); 
if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
	}?>
<?php
	//session_start();
	error_reporting(E_ALL);
	$db= mysqli_connect("localhost","root","","mydb");

	if(isset($_POST['reg_btn']))
	{
		//$id= $_POST['id'];
		$name= $_POST['name'];
		$department= $_POST['department'];
		$username= $_POST['username'];
		$password= md5($_POST['password']);
		$sdate= $_POST['sdate'];
		$edate= $_POST['edate'];
		$email= $_POST['email'];
		$mobile= $_POST['mobile'];
		$designation= $_POST['designation'];
		$college= $_POST['college'];
		$role='2';

		$sql="INSERT INTO users(name,department,username,password,sdate,edate,mail,mobile,designation,college,role) VALUES('$name','$department','$username','$password','$sdate','$edate','$email','$mobile','$designation','$college','$role')";
		mysqli_query($db,$sql);
		header("location: viewco.php");
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="css/newstyle2.css">
	</head>
<?php include 'newheader.php'?>
	<body>
		<center>
			<div class="div2">
				<div class='das1'><h2 align="center">Register Co-ordinator</h2></div>
				<form  method="POST" action="regco.php">
						<table border="0" width="500" align="center" class="demo-table">
						<tr>
							<td><b>Full Name</b></td>
							<td><input type="text" name="name" required="required" class="demoInputBox" size="20"></td>
							<td><b>Designation</b></td>
							<td><select name="designation" style="width: 89%; height: 33px;">
									<option value="Assistant Professor">Assistant Professor</option>
									<option value="Associate Professor">Associate Professor</option>
									<option value="Professor">Professor</option>
    							</select><br>		
    						</td>
    					</tr>
						<tr>	
							<td><b>Department</b></td>
							<td><select name="department" style="width: 87%; height: 30px;">
									<option value="MCA">MCA</option>
									<option value="MBA">MBA</option>
									<option value="MTech">MTech</option>
    							</select><br>
    						</td>
    						<td><b>College</b></td>
							<td><input type="text" name="college" required="required" class="demoInputBox"></td>
						</tr>
						<tr>	
							<td><b>Mobile</b></td>
							<td><input type="text" name="mobile" required="required" class="demoInputBox" maxlength="10" minlength="10"></td>
							<td><b>E-mail</b></td>
							<td><input type="email" name="email" required="required" class="demoInputBox" size='20'></td>
						</tr>
						<tr>	
							<td><b>Username</b></td>
							<td><input type="text" name="username" required="required" class="demoInputBox"></td>
							<td><b>Password</b></td>
							<td><input type="text" name="password" required="required" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>Start Date</b></td>
							<td><input type="date" name="sdate" required="required" class="demoInputBox" style="width: 87%; height: 35px;"></td>
							<td><b>End Date</b></td>
							<td><input type="date" name="edate" required="required" class="demoInputBox" style="width: 87%; height: 35px;"></td>
						</tr>
						<tr>
							<td colspan=4>
							<input type="submit" value="Add" name="reg_btn" class="btnRegister" style="width:100px;"></td>
						</tr>
					</table>
				</form>
			</div>
		</center>		
	</body>
</html>