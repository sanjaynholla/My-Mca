<?php session_start(); 
if(!isset($_SESSION["username"])){
		header("location:adlogin.php");
	}?>
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

    $sql = "SELECT * FROM users where role='2'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0)
    {
    
    ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>View User</title>
            <link rel="stylesheet" href="css/newstyle.css"> 
        </head>
        <body>
            <?php include 'newheader.php'?>
        <center>
        <!--<div class="div0">

            <table class="tab0" align="center">
                <tr>
                    
                </tr>
            </table>
        </div>-->
        <div class="div1">
            <!--<a href=".php"?>Add</a>-->
            <div class='das1'><h2 align="center">View Co-Ordinator</h2></div>
            <div class="b">
        <table class="tabl" align="center" border='1' cellpadding='10'>
            <tr>
            </tr>    
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Username</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Starting Date</th>
                <th>Ending Date</th>
                <th colspan="3">Options</th>
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
            echo '<td><font color="#663300"><a href="editco.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
            echo '<td><font color="#663300"><a href="delco.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
            echo '<td><font color="#663300"><a href="coresetpwd.php?id=' . $row['id'] . '">Reset Password</a></font></b></td>';
            print "</td> </tr>";
            /*echo $pwd; 
            print "</td> </tr>";*/
        }
    } 
    else 
    {
       ?>
            <head>
            </head>
            <body>
                <?php include 'newheader.php'?>      
                <?php echo 'No Data Found!';?>
            </body>
        <?php
    }
    mysqli_close($db);
?>
</table>
</center>
</div>
</div>
</form>
</body>
</html>