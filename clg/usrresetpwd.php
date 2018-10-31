<?php session_start(); 
if(!isset($_SESSION["username"]))
{
        header("location:adlogin.php");
}?>
<?php
  function valid($id, $name, $department,$username,$designation,$college,$password, $error)
  {
?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
        <head>
        <title>Edit Records</title>
        <link rel="stylesheet" href="css/newstyle2.css">
    </head>
    <body>
        <?php include 'newheader.php'?>
        <?php
            if ($error != '')
            {
                echo '<div class="div2">'.$error.'</div>';
            }
        ?><center>
        <div class="div2">
                <div class='das1'><h2 align="center">Edit User</h2></div>
        <form  method="POST" action="">
            <table border="0" width="750" align="center" class="demo-table">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <tr>
                    <td>Full Name</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>    
                    <td>Designation</td>
                    <td><?php echo $designation; ?></td>
                </tr>    
                    <td>Department</td>
                    <td><?php echo $department; ?></td>
                </tr>
                <tr>    
                    <td>College</td>
                        <td><?php echo $college; ?></td>
                </tr>
                <tr>            
                    <td>Username</td>
                    <td>
                        <?php echo $username;?>
                    </td>
                </tr>
                <tr>
                    <td>Enter New Password</td>
                    <td>
                        <input type="text" name="password" required="required" class="demoInputBox">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Reset" class='btnRegister'>
                    </td>
                </tr>
            </table>
        </form>
        </center>
    </body>
    </html>
    <?php
    }
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
    if (isset($_POST['submit']))
    {
        if (is_numeric($_POST['id']))
        {
            $id = $_POST['id'];
            //$name = mysqli_real_escape_string($db,$_POST['name']);
            //$department = mysqli_real_escape_string($db,$_POST['department']);
            //$username = mysqli_real_escape_string($db,$_POST['username']);
            //$college = mysqli_real_escape_string($db,$_POST['college']);
            //$designation = mysqli_real_escape_string($db,$_POST['designation']);
            $password1 = mysqli_real_escape_string($db,$_POST['password']);
            $password=md5($password1);
            $role='2';
            if ($password == '')
            {
                $error = 'ERROR: Please fill in all required fields!';
                valid($id,$name,$department,$username,$designation,$college,$password, $error);
            }
            else
            {
                mysqli_query($db,"UPDATE users SET password='$password' WHERE id='$id'") or die(mysqli_error());
                header("Location: viewuser.php");
            }
        }
        else
        {
            ?>
            <head>
             
            </head>
            <body>
            <?php include 'newheader.php'?>      
                <?php echo 'Error';?>
            </body>
        <?php
        }
    }
    else
    { 
        if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
        {
            $id = $_GET['id'];
            $result = mysqli_query($db,"SELECT * FROM users WHERE id=$id and role='3'") or die(mysqli_error());
            $row = mysqli_fetch_array($result);
            if($row)
            {
                $name = $row['name'];
                $department = $row['department'];
                $username= $row['username'];
                $designation=$row['designation'];
                $college=$row['college'];
                $role='3';
                //valid($id, $name, $department,$mobile,$username,$sdate,$edate,'');
                valid($id,$name,$department,$username,$designation,$college,$password,'');
            }
            else
            {?>
                <head>
                </head>
                <body>
                    <?php include 'newheader.php'?>      
                    <?php echo 'No Data Found!';?>
                </body>
             <?php
         }
        }
        else
    {?>
            <head>
             
            </head>
            <body>
            <?php include 'newheader.php'?>      
                <?php echo 'Error';?>
            </body>
        <?php
    }
}
?>