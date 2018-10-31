<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location:adlogin.php");
    }
    error_reporting(E_ALL);
    //ini_set('display_errors', TRUE);
    //ini_set('display_startup_errors', TRUE);
    $db= mysqli_connect("localhost","root","","mydb");

    //if(isset($_POST['reg_btn']))
    //{
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
        //$totalm=$a1+$b1+$c1+$d1;
        //$role='3';
 
        $sql="INSERT INTO marks(username,ccode,scrno,pktno,1a,1b,1c,1d,2a,2b,2c,2d,3a,3b,3c,3d,4a,4b,4c,4d,5a,5b,5c,5d,6a,6b,6c,6d,7a,7b,7c,7d,8a,8b,8c,8d,9a,9b,9c,9d,10a,10b,10c,10d) VALUES('$username','$ccode','$scrno','$pktno','$a1','$b1','$c1','$d1','$a2','$b2','$c2','$d2','$a3','$b3','$c3','$d3','$a4','$b4','$c4','$d4','$a5','$b5','$c5','$d5','$a6','$b6','$c6','$d6','$a7','$b7','$c7','$d7','$a8','$b8','$c8','$d8','$a9','$b9','$c9','$d9','$a10','$b10','$c10','$d10')";
        mysqli_query($db,$sql);
    //}
        $sql = "SELECT * FROM users where role='3'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0)
    {
    ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>View User</title>
            <!--<link rel="stylesheet" href="css/newstyle.css"> -->
        </head>
        <body>
            <center>
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
?>