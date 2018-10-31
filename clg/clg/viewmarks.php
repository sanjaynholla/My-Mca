<?php
	session_start(); 
	if(!isset($_SESSION["username"]))
	{
        header("location:adlogin.php");
 	}
 ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "mydb";

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $db);
    // Check connection
    if (!$db) 
    {
        die("Connection failed: " . mysqli_connect_error());
    } 
    if(isset($_POST['reg_btn']))
    {
    	$ccode= $_POST['ccode'];
		$pktno= $_POST['pktno'];
		$scrno= $_POST['scrno'];
    	$user=$_SESSION["username"];
    	$sql = "SELECT * FROM marks where username='$user' and ccode='$ccode' and pktno='$pktno' and scrno='$scrno'";
    	$result = mysqli_query($db, $sql);
    	if (mysqli_num_rows($result) > 0)
    	{
        	while($row = mysqli_fetch_assoc($result))
        	{
		        $scr=$row["scrno"];
		        $pkt=$row["pktno"];
		        $ccod=$row["ccode"];
		        $usr=$row["username"];
		        
		        $a1=$row["1a"];
		        $b1=$row["1b"];
		        $c1=$row["1c"];
		        $d1=$row["1d"];

		       	$a2=$row["2a"];
		        $b2=$row["2b"];
		        $c2=$row["2c"];
		        $d2=$row["2d"];

		        $a3=$row["3a"];
		        $b3=$row["3b"];
		        $c3=$row["3c"];
		        $d3=$row["3d"];

		        $a4=$row["4a"];
		        $b4=$row["4b"];
		        $c4=$row["4c"];
		        $d4=$row["4d"];

		        $a5=$row["5a"];
		        $b5=$row["5b"];
		        $c5=$row["5c"];
		        $d5=$row["5d"];

		        $a6=$row["6a"];
		        $b6=$row["6b"];
		        $c6=$row["6c"];
		        $d6=$row["6d"];

		        $a7=$row["7a"];
		        $b7=$row["7b"];
		        $c7=$row["7c"];
		        $d7=$row["7d"];

		        $a8=$row["8a"];
		        $b8=$row["8b"];
		        $c8=$row["8c"];
		        $d8=$row["8d"];

		        $a9=$row["9a"];
		        $b9=$row["9b"];
		        $c9=$row["9c"];
		        $d9=$row["9d"];

		        $a10=$row["10a"];
		        $b10=$row["10b"];
		        $c10=$row["10c"];
		        $d10=$row["10d"];

		        $t1=$row["t1"];
		        $t2=$row["t2"];
		        $t3=$row["t3"];
		        $t4=$row["t4"];
		        $t5=$row["t5"];
		        $t6=$row["t6"];
		        $t7=$row["t7"];
		        $t8=$row["t8"];
		        $t9=$row["t9"];
		        $t10=$row["t10"];
		        
		        $gt=$row["gt"];

		        $gt1=$row["gt1"];
		        $gt2=$row["gt2"];
		        $gt3=$row["gt3"];
		        $gt4=$row["gt4"];
		        $gt5=$row["gt5"];
            ?>
            <head>
					<link rel="stylesheet" href="css/markstable.css">
			</head>
            <body>
            	<?php include 'newheader.php'?>
            <div class="div8">
            	<div class='das'><h2 align="center">Marks Sheet</h2></div>
        	<table class="blnk" width="750" align="center">
				<tr>
				</tr>
				<tr>
					<td><b>Course Code</b></td>
					<td><?php echo $ccode; ?></td>
					<td><b>Packet No</b></td>
					<td><?php echo $pkt; ?></td>
    			</tr>
    			<tr>	
					<td><b>Script No</b></td>
					<td><?php echo $scrno; ?>
    				</td>
    			</tr>
    			</table>
    			<br/>
    			<table class="markstable" border="1" width="750" align="center">
            	<tr>	
    				<th><b>Question Number</b></th>
					<th><b>a</b></th>
					<th><b>b</b></th>
					<th><b>c</b></th>
					<th><b>d</b></th>
					<th><b>Total Marks</b></th>
					<th><b>Marks Considered</b></th>
				</tr>
				<tr>
					<td><b>1</b></td>
					<td><?php echo $a1; ?></td>
					<td><?php echo $b1; ?></td>
					<td><?php echo $c1; ?></td>
					<td><?php echo $d1; ?></td>
					<td><?php echo $t1; ?></td>
					<td rowspan="2"><?php echo $gt1; ?></td>
				</tr>
				<tr>
					<td><b>2</b></td>
					<td><?php echo $a2; ?></td>
					<td><?php echo $b2; ?></td>
					<td><?php echo $c2; ?></td>
					<td><?php echo $d2; ?></td>
					<td><?php echo $t2; ?></td>
				</tr>
				<tr>
					<td><b>3</b></td>
					<td><?php echo $a3; ?></td>
					<td><?php echo $b3; ?></td>
					<td><?php echo $c3; ?></td>
					<td><?php echo $d3; ?></td>
					<td><?php echo $t3; ?></td>
					<td rowspan="2"><?php echo $gt2; ?></td>
				</tr>
				<tr>
					<td><b>4</b></td>
					<td><?php echo $a4; ?></td>
					<td><?php echo $b4; ?></td>
					<td><?php echo $c4; ?></td>
					<td><?php echo $d4; ?></td>
					<td><?php echo $t4; ?></td>
				</tr>
				<tr>
					<td><b>5</b></td>
					<td><?php echo $a5; ?></td>
					<td><?php echo $b5; ?></td>
					<td><?php echo $c5; ?></td>
					<td><?php echo $d5; ?></td>
					<td><?php echo $t5; ?></td>
					<td rowspan="2"><?php echo $gt3; ?></td>
				</tr>
				<tr>
					<td><b>6</b></td>
					<td><?php echo $a6; ?></td>
					<td><?php echo $b6; ?></td>
					<td><?php echo $c6; ?></td>
					<td><?php echo $d6; ?></td>
					<td><?php echo $t6; ?></td>
				</tr>
				<tr>
					<td><b>7</b></td>
					<td><?php echo $a7; ?></td>
					<td><?php echo $b7; ?></td>
					<td><?php echo $c7; ?></td>
					<td><?php echo $d7; ?></td>
					<td><?php echo $t7; ?></td>
					<td rowspan="2"><?php echo $gt4; ?></td>
				</tr>
				<tr>
					<td><b>8</b></td>
					<td><?php echo $a8; ?></td>
					<td><?php echo $b8; ?></td>
					<td><?php echo $c8; ?></td>
					<td><?php echo $d8; ?></td>
					<td><?php echo $t8; ?></td>
				</tr>
				<tr>
					<td><b>9</b></td>
					<td><?php echo $a9; ?></td>
					<td><?php echo $b9; ?></td>
					<td><?php echo $c9; ?></td>
					<td><?php echo $d9; ?></td>
					<td><?php echo $t9; ?></td>
					<td rowspan="2"><?php echo $gt5; ?></td>
				</tr>
				<tr>
					<td><b>10</b></td>
					<td><?php echo $a10; ?></td>
					<td><?php echo $b10; ?></td>
					<td><?php echo $c10; ?></td>
					<td><?php echo $d10; ?></td>
					<td><?php echo $t10; ?></td>
				</tr>		
			</table>
			<table class="gt" width="750" align="center">
				<tr>
				</tr>
				<tr>
					<td><b></b></td>
					<td><b>Grand Total</b></td>
					<td><b><?php echo $gt; ?></b></td>
    			</tr>
    			</table>
		</div>
	</body>
			<?php
		}
    } 
    else 
    {
    	?>
    	<body>
    	<?php include 'newheader.php';
        echo "<h2 align='center'>No Results Found</h2>";?>
    	</body>
    <?php
	}
    mysqli_close($db);
}
else
{
?>
<html>
	<head>
		<link rel="stylesheet" href="css/newstyle2.css">
	</head>
	<body>
		<?php include 'newheader.php'?>
		<center>
			<div class="div2">
				<form  method="POST" action="viewmarks.php">
					<table class="tabl2" align="center">
						<tr>
							<td colspan=4><h2 align="center">Marks view</h2></td>
						</tr>
						<tr>
							<td><b>Course Code</b></td>
							<td><input type="text" name="ccode" required="required" class="demoInputBox1" size="20"></td>
						</tr>
						<tr>	
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
    						<td colspan=4>
							<input type="submit" value="View" name="reg_btn" class="btnRegister2" style="width:100px;text-align: center;"></td>
						</tr>
					</table>
				</form>
			</div>
		</center>		
<?php } ?>
	</body>
</html>