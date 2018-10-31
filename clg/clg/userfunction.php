<?php
	session_start();
	$db= mysqli_connect("localhost","root","","mydb");

	if(isset($_POST['reg_btn']))
	{
		//$id=$_POST['id'];
		$scode= $_POST['scode'];
		$udate= $_POST['udate'];
		$utime= $_POST['utime'];
		$scripts= $_POST['scripts'];
		$pkt=$_POST['pkt'];
		$username=$_SESSION['username'];
 
		$sql="INSERT INTO vals(scode,scripts,utime,udate,pkt,username) VALUES('$scode','$scripts','$utime','$udate','$pkt','$username')";
		mysqli_query($db,$sql);
		header("location: calcu.php");
	}
?>

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
							<td colspan=2><h2 align="center"> Evaluation </h2></td>
						</tr>
						<tr>
							<td>Subject Code</td>
							<td><input type="text" name="scode" required="required" class="demoInputBox"></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><input type="Date" name="udate" required="required" class="demoInputBox"></td>
						</tr>
						<tr>							
							<td>Time</td>
							<td><input type="Time" name="utime" required="required" class="demoInputBox"></td>
						</tr>
						<tr>
							<td>Packet No</td>
							<td><select name="pkt" style="width: 50px; height: 30px;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
    							</select><br>
    						</td>
    					</tr>
    					<tr>	
							<td>No of Scripts</td>
							<td><input type="number" name="scripts" required="required" class="demoInputBox">
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