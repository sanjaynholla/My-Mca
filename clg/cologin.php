<?php
	session_start();

	$db= mysqli_connect("localhost","root","","mydb");
	$msg="";
	if(isset($_POST['login_btn']))
	{
	
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$password= mysqli_real_escape_string($db,$_POST['password']);

		$sql="SELECT * FROM co WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$sql);
		if(mysqli_num_rows($result)==1)
		{
			$_SESSION['username']=$username;
			header("location: coperm.php");
		}
		else
		{
			$msg='<center><h3 style="color: red"> Username & Password Mismatch </h1></center>';
		}
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<center>
		<div class="loginBox">
			<!--<img src="user.png" class="user">-->
			<h2>Co-Ordinator Login</h2>
			<form action="cologin.php" method="post">
				<br/>
					Username <input type="text" name="username" required="required"><br/><br/>
					Password <input type="password" name="password" required="required"><br/><br/>
					<input type="submit" name="login_btn" value="Login">
					<?php echo $msg ; ?>
			</form>
		</center>	
		</div>
	</body>
</html>
