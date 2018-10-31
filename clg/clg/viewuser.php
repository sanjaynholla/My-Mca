<?php session_start(); 
if(!isset($_SESSION["username"])){
        header("location:adlogin.php");
    }?>
<?php include 'newheader.php'?>
<!--<br/><br/><br/><br/>-->
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

    $sql = "SELECT * FROM users where role='3'";
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
            <center>
        <div class="div1">
            <div class='das1'><h2 align="center">View User</h2></div>
            <div class="b">
        <!--<table class="tabl" align="center">-->
            <table class="tabll" align="center" border='1' cellpadding='10'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>College</th>
                <th>Username</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Starting Date</th>
                <th>Ending Date</th>
                <th colspan="2">Options</th>
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
            $des=$row["designation"];
            $clg=$row["college"];

            print "<tr> <td>";
            echo $id; 
            print "</td> <td>";
            echo $name; 
            print "</td> <td>";
            echo $dept; 
            print "</td> <td>";
            echo $des;
            print "</td> <td>";
            echo $clg;
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
            echo '<td><font color="#663300"><a href="editusr.php?id=' . $row['id'] . '">Edit</a></font></b></td>';
            echo '<td><font color="#663300"><a href="delusr.php?id=' . $row['id'] . '">Delete</a></font></b></td>';
            print "</td> </tr>";
            /*echo $pwd; 
            print "</td> </tr>";*/
        }
    } 
    else 
    {
        echo "No Results Found";
    }
    mysqli_close($db);
?>
</table>
</center>
</div>
</form>
</body>
</html>