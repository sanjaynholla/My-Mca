<?php session_start(); 
if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
}?>
<?php
	//session_start();
	error_reporting(0);
	$user = $_SESSION['username'];

	if ($user)
	{

		if(isset($_POST['submit']))
		{
		//check fields
			$oldpassword = md5($_POST['oldpassword']);
			$newpassword = md5($_POST['newpassword']);
			$repeatnewpassword = md5($_POST['repeatnewpassword']);
			//check pass against db
			$db= mysqli_connect("localhost","root","","mydb");
			$queryget = mysqli_query($db,"SELECT password FROM users WHERE username='$user'") or die("Query didn't work");
			$row = mysqli_fetch_assoc($queryget);
			$oldpassworddb = $row['password'];
			//check pass
			if ($oldpassword==$oldpassworddb)
			{
			//check twonew pass
				if ($newpassword==$repeatnewpassword)
				{
				//success
				//change pass in db
					/*if (strlen($newpassword)>25||strlen($newpassword)<6)   <---------------Here is the code
					{
				 		echo "Password must be betwwen 6 & 25";
					}
				else
				{*/
					$querychange = mysqli_query($db,"UPDATE users SET password='$newpassword' WHERE username='$user'");
					session_destroy();
					die("Your pass has benn changed.<a href='adlogin.php'>Return</a> to the main page");
				}
				else
					echo '<script type="text/javascript">'; 
					echo 'alert("New Passwords doesnt match");'; 
					echo 'window.location.href = "changepwd.php";';
					echo '</script>';	
			}
			else
				echo '<script type="text/javascript">'; 
				echo 'alert("Old Password doesnt match");'; 
				echo 'window.location.href = "changepwd.php";';
				echo '</script>';
		}
		else
		{
		?>	
			<html>
				<head>
					<link rel='stylesheet' href='css/newstyle2.css'>
				</head>
				<body>
				<?php include 'newheader.php'?>
				<div class='das1'><h2 align='center'>Change Password</h2></div>
				<table class='demo-table2' align='center'>
				<form action='changepwd.php' method='POST'>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td>Old password:</td>
						<td><input type='text' name='oldpassword' class="demoInputBox"></td>
					</tr>
					<tr>
						<td>New password:</td>
						<td><input type='password' name='newpassword' class="demoInputBox"></td>
					</tr>
					<tr>
						<td>Repeat new password:</td>
						<td><input type='password' name='repeatnewpassword' class="demoInputBox"></td>
					<tr>
						<td><input type='submit' name='submit' value='Change Password' class='btnRegister2'></td>
					</tr>	
				</form>
				</table>
				</body>
		<?php
	}
	}
	else
	   die("You must be logged in to change your password");
?>