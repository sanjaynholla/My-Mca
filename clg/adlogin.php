<?php
	session_start();
	$db= mysqli_connect("localhost","root","","mydb");
	$msg="";
	if(isset($_POST['login_btn']))
	{
		
		$username= mysqli_real_escape_string($db,$_POST['username']);
		$password= md5(mysqli_real_escape_string($db,$_POST['password']));
		
		$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_assoc($result);
 		$count=mysqli_num_rows($result);
 		if($count==1)
		/*if(mysqli_num_rows($result)==1)*/
		{
			$_SESSION['users']=array('username'=>$row['username'] , 'password'=>$row['password'] , 'role'=>$row['role']);
   			$role=$_SESSION['users']['role'];
   			$_SESSION['username'] = $username;
   			//Redirecting User Based on Role
    		switch($role)
    		{
  				case '1': header('location:perm.php');
  							break;
  				case '2': header('location:coperm.php');
  							break;
  				case '3': header('location:userperm.php');
  							break;
  				default : echo "Role for given username not found!";
  							break;
			}
		}	
		else
		{
			//$msg='<center><h3 style="color: red"> Username & Password Mismatch </h1></center>';
			echo '<script language="javascript">';
  			echo 'alert("Username and Password Mismatch");';  //not showing an alert box.
  			echo 'window.location.href = "adlogin.php";';
  			echo '</script>';
		}
	}	
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login Form</title>
		<!--<link rel="stylesheet" href="style.css">-->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/mystyles2.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--<center>
		<div class="loginBox">
			<img src="logo.png" alt="bms_logo" style="padding-top:20px;width:150px;height:150px;"><br/>
			<h2>Admin Login</h2>
			<button onclick="location.href='adlogin.php'">Admin</button>
style="font-size:10pt;color:white;background-color:#1e90ff;border:2px solid #1e90ff;padding:5px;width:100px">
			<button onclick="location.href='cologin.php'">Co-Ordinator</button>
			<button onclick="location.href='uslogin.php'">User</button>
			<form method="POST" action="adlogin.php">
				<br/>
					<b>Username <input type="text" name="username" required="required"><br/><br/></b>
					<b>Password <input type="password" name="password" required="required"><br/><br/></b>
					<input type="submit" name="login_btn" value="LOGIN" style="font-size:10pt;color:white;background-color:#1b64be;border:2px solid #1b64be;padding:5px;width:100px">
					<?php echo $msg; ?>
			</form>
		</center>	
		</div>-->

<div class="col-lg-offset-1 col-lg-10">
 <!--
 	<?php phpinfo(); ?>
-->
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="adlogin.php">
      <img src="img/logo.png" alt="bms_logo" style="padding-bottom:0px;width:100px;height:100px;"><br/>
      <h4 style="padding-top: 0px;">Login</h4>
      <input type="text" name="username" required="required" placeholder="username"><br/><br/>
	  <input type="password" name="password" required="required" placeholder="password"><br/><br/></b>
      <input type="submit" name="login_btn" value="LOGIN" style="background: #1571B4; color: white;">
      <!--<p class="message">Not registered? <a href="changepwd.php">Create an account</a></p>-->
    </form>
  </div>
</div>
	</body>
</html>