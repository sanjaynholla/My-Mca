<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
	}
	error_reporting(E_ALL);
	//ini_set('display_errors', TRUE);
	//ini_set('display_startup_errors', TRUE);
	$db= mysqli_connect("localhost","root","","mydb");

	if(isset($_POST['reg_btn']))
	{
		$ccode= $_POST['ccode'];
		$pktno= $_POST['pktno'];
		$scrno= $_POST['scrno'];
		$a1= $_POST['1a'];
		$b1= $_POST['1b'];
		$c1= $_POST['1c'];
		$d1= $_POST['1d'];
		$a2= $_POST['2a'];
		$b2= $_POST['2b'];
		$c2= $_POST['2c'];
		$d2= $_POST['2d'];
		$a3= $_POST['3a'];
		$b3= $_POST['3b'];
		$c3= $_POST['3c'];
		$d3= $_POST['3d'];
		$a4= $_POST['4a'];
		$b4= $_POST['4b'];
		$c4= $_POST['4c'];
		$d4= $_POST['4d'];
		$a5= $_POST['5a'];
		$b5= $_POST['5b'];
		$c5= $_POST['5c'];
		$d5= $_POST['5d'];
		$a6= $_POST['6a'];
		$b6= $_POST['6b'];
		$c6= $_POST['6c'];
		$d6= $_POST['6d'];
		$a7= $_POST['7a'];
		$b7= $_POST['7b'];
		$c7= $_POST['7c'];
		$d7= $_POST['7d'];
		$a8= $_POST['8a'];
		$b8= $_POST['8b'];
		$c8= $_POST['8c'];
		$d8= $_POST['8d'];
		$a9= $_POST['9a'];
		$b9= $_POST['9b'];
		$c9= $_POST['9c'];
		$d9= $_POST['9d'];
		$a10= $_POST['10a'];
		$b10= $_POST['10b'];
		$c10= $_POST['10c'];
		$d10= $_POST['10d'];
		$username = $_SESSION['username'];
		$t1=$a1+$b1+$c1+$d1;
		$t2=$a2+$b2+$c2+$d2;
		$t3=$a3+$b3+$c3+$d3;
		$t4=$a4+$b4+$c4+$d4;
		$t5=$a5+$b5+$c5+$d5;
		$t6=$a6+$b6+$c6+$d6;
		$t7=$a7+$b7+$c7+$d7;
		$t8=$a8+$b8+$c8+$d8;
		$t9=$a9+$b9+$c9+$d9;
		$t10=$a10+$b10+$c10+$d10;
		$gt1=0;
		$gt2=0;
		$gt3=0;
		$gt4=0;
		$gt5=0;
		if($t1>=$t2)
		{
			$gt1=$t1;
		}
		else
		{
			$gt1=$t2;		
		}

		if($t3>=$t4)
		{
			$gt2=$t3;
		}
		else
		{
			$gt2=$t4;	
		}

		if($t5>=$t6)
		{
			$gt3=$t5;
		}
		else
		{
			$gt3=$t6;	
		}

		if($t7>=$t8)
		{
			$gt4=$t7;
		}
		else
		{
			$gt4=$t8;	
		}

		if($t9>=$t10)
		{
			$gt5=$t9;
		}
		else
		{
			$gt5=$t10;	
		}

		$gt=$gt1+$gt2+$gt3+$gt4+$gt5;

		//$role='3';
 
		$sql="INSERT INTO marks(username,ccode,scrno,pktno,1a,1b,1c,1d,2a,2b,2c,2d,3a,3b,3c,3d,4a,4b,4c,4d,5a,5b,5c,5d,6a,6b,6c,6d,7a,7b,7c,7d,8a,8b,8c,8d,9a,9b,9c,9d,10a,10b,10c,10d,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,gt,gt1,gt2,gt3,gt4,gt5) VALUES('$username','$ccode','$scrno','$pktno','$a1','$b1','$c1','$d1','$a2','$b2','$c2','$d2','$a3','$b3','$c3','$d3','$a4','$b4','$c4','$d4','$a5','$b5','$c5','$d5','$a6','$b6','$c6','$d6','$a7','$b7','$c7','$d7','$a8','$b8','$c8','$d8','$a9','$b9','$c9','$d9','$a10','$b10','$c10','$d10','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$gt','$gt1','$gt2','$gt3','$gt4','$gt5')";
		mysqli_query($db,$sql);
		header("location: userperm.php");
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="css/markstable.css">
		<?php include 'newheader.php'?>
	</head>
	<body>
		<center>
			<div class="div2">
				<div class='das11'><h2 align="center">Dashboard</h2></div>
				<form  method="POST" action="marksentry.php">
					<table border="0" width="500" align="center" class="demo-table">
						<tr>
							<td></td>
						</tr>	
						<tr>
							<td><b>Course Code</b></td>
							<td><input type="text" name="ccode" required="required" class="demoInputBox"></td>
							<td><b>Packet No</b></td>
							<td><select name="pktno" style="width: 89%; height: 33px;">
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
							<td><b>Script No</b></td>
							<td><select name="scrno" style="width: 89%; height: 30px;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
    							</select><br>
    						</td>
    					</tr>
    					<tr>	
    						<th><b>Question Number</b></th>
							<th><b>a</b></th>
							<th><b>b</b></th>
							<th><b>c</b></th>
							<th><b>d</b></th>
						</tr>
						<tr>
							<td><b>1</b></td>
							<td><input type="number" name="1a" minlength="1" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="1b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="1c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="1d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>2</b></td>
							<td><input type="number" name="2a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="2b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="2c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="2d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>3</b></td>
							<td><input type="number" name="3a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="3b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="3c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="3d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>4</b></td>
							<td><input type="number" name="4a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="4b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="4c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="4d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>5</b></td>
							<td><input type="number" name="5a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="5b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="5c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="5d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>6</b></td>
							<td><input type="number" name="6a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="6b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="6c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="6d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>7</b></td>
							<td><input type="number" name="7a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="7b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="7c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="7d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>8</b></td>
							<td><input type="number" name="8a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="8b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="8c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="8d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>9</b></td>
							<td><input type="number" name="9a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="9b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="9c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="9d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td><b>10</b></td>
							<td><input type="number" name="10a" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="10b" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="10c" maxlength="2" class="demoInputBox"></td>
							<td><input type="number" name="10d" maxlength="2" class="demoInputBox"></td>
						</tr>
						<tr>
							<td colspan=4>
							<input type="submit" value="Store" name="reg_btn" class="btnRegister" style="width:100px;text-align: center;"></td>
						</tr>
					</table>
				</form>
			</div>
		</center>		
	</body>
</html>
