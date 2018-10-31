<?php session_start(); 
if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
	}?>
<?php include 'newheader.php'?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydb";

	// Create connection
	$db = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$db) 
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	if (isset($_GET['id']) && is_numeric($_GET['id']))
 	{
		$id = $_GET['id'];
		$result = mysqli_query($db,"DELETE FROM users WHERE id=$id and role='2'")	or die(mysqli_error());
		/* $id=$_POST['del'];
		$sql = "DELETE FROM users WHERE id=$id and role='2'";
		if (mysqli_query($db, $sql)) 
		{
	    	echo "Record deleted successfully";*/
	    header("location: viewco.php");
		/*} 
		else 
		{
	    	echo "Error deleting record: " . mysqli_error($db);
	    	header("location: viewco.php");
		}*/
		mysqli_close($db);
	}
	/*if(isset($_POST['sea_btn']))
    {
        $id=$_POST['del'];
        $sql = "SELECT * FROM users WHERE id=$id  and role='2'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) > 0)
        {
        ?>
	        <!DOCTYPE html>
	        <html>
	        <head>
	            <title>View User</title>
	            <link rel="stylesheet" href="newstyle.css"> 
	        </head>
	        <body>
	            <center>
	        <div class="div1">
	        <table class="tabl" align="center">
	            <tr>
	                <th>ID</th>
	                <th>Name</th>
	                <th>Department</th>
	                <th>Username</th>
	                <th>Mail</th>
	                <th>Mobile</th>
	                <th>Starting Date</th>
	                <th>Ending Date</th>
	                <!--<th>Password</th>-->
	            </tr>    
	        <?php
	        while($row = mysqli_fetch_assoc($result))
	        {
	            $id=$row["id"];
	            $name=$row["name"];
	            $dept=$row["department"];
	            $usr=$row["username"];
	            $mail=$row["mail"];
	            $mb=$row["mobile"];
	            $sd=$row["sdate"];
	            $ed=$row["edate"];

	            print "<tr> <td>";
	            echo $id; 
	            print "</td> <td>";
	            echo $name; 
	            print "</td> <td>";
	            echo $dept; 
	            print "</td> <td>";
	            echo $usr;
	            print "</td> <td>";
	            echo $mail;
	            print "</td> <td>";
	            echo $mb;
	            print "</td> <td>";
	            echo $sd;
	            print "</td> <td>";
	            echo $ed; 
	            print "</td> </tr>";
	        }
    	} 
    	else 
    	{
        	echo "No Results Found";
   		}
    mysqli_close($db);
	}*/
?>	
		
<!--<div align="right" class="div3">
	<form action="viewco.php" method="post">
		<br/><input class="delbtn" type="submit" name="view_btn" value="View">
	</form>	
	<form action="delco.php" method="post">
		<br/><input type="text" name="del" required="required">
		<input class="delbtn" type="submit" name="del_btn" value="Delete">
		<input class="delbtn" type="submit" name="sea_btn" value="Search">
	</form>
</div>	
</body>
</html>-->