<?php session_start(); 
if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
	}?>
<html>
	<body>
		<center>
			<link rel="stylesheet" href="css/newstyle.css">
			<body>
				<!--<header>
  					<h4 align="center">BMS College of Engineering</h4>
  					<button onclick="location.href='logout.php'">Logout</button>
				</header>-->
				<?php include 'newheader.php'?>
				<div>
					<br/>
					<?php
						$username = $_SESSION['username'];
					?>
					<div class='das'><h2 align="center">Dashboard</h2></div>
					<div class='a'>
					<!--<input class="button" type="button" value="Add User" onclick="location.href='reguser.php'">-->
					<input class="button" type="button" value="Marks Entry" onclick="location.href='marksentry.php'">
					<!--<input class="button" type="button" value="View User" onclick="location.href='viewuser.php'">-->
					<input class="button" type="button" value="Generate Report" onclick="location.href='#.php'">
					<input class="button" type="button" value="Change Password" onclick="location.href='changepwd.php'">
					<input class="button" type="button" value="View Marks" onclick="location.href='viewmarks.php'">
				</div>
				</div>	
			</body>	
		</center>		
	</body>
</html>