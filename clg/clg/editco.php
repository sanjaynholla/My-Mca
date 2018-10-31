<?php session_start(); 
if(!isset($_SESSION["username"])){
        header("location:adlogin.php");
    }?>
<?php include 'newheader.php'?>
<?php
  function valid($id, $name, $department,$email,$mobile,$username,$sdate,$edate, $error)
  {
?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
    <html>
        <head>
        <title>Edit Records</title>
    </head>
    <body>
        <?php
            if ($error != '')
            {
                echo '<div class="div2">'.$error.'</div>';
            }
        ?>
        <form  method="POST" action="">
            <table border="0" width="500" align="center" class="demo-table">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <tr>
                    <td colspan="2"><b><font color='Red'>Edit Co-Ordinator </font></b></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="name" class="demoInputBox" value="<?php echo $name; ?>"/></td>
                </tr>
                <tr>
                    <td>Department</td>
                    <td>
                        <select name="department" value="<?php echo $department; ?>" style="width: 200px; height: 30px;">
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="MTech">MTech</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td>
                        <input type="text" name="mobile" required="required" value="<?php echo $mobile; ?>" class="demoInputBox" maxlength="10" minlength="10">
                    </td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>
                        <input type="text" name="email" required="required" value="<?php echo $email; ?>" class="demoInputBox">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" required="required" value="<?php echo $username;?>" class="demoInputBox">
                    </td>
                </tr>
                <tr>
                    <td>Starting Date</td>
                    <td><input type="text" name="sdate" required="required" value="<?php echo $sdate;?>" class="demoInputBox"></td>
                </tr>
                <tr>
                    <td>Ending Date</td>
                    <td><input type="text" name="edate" required="required" value="<?php echo $edate;?>" class="demoInputBox"></td>
                </tr>
                <tr align="Right">
                    <td colspan="2">
                        <input type="submit" name="submit" value="Edit Records">
                    </td>
                </tr>
            </table>
        </form>
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
            $name = mysqli_real_escape_string($db,$_POST['name']);
            $department = mysqli_real_escape_string($db,$_POST['department']);
            $mobile = mysqli_real_escape_string($db,$_POST['mobile']);
            $email = mysqli_real_escape_string($db,$_POST['email']);
            $username = mysqli_real_escape_string($db,$_POST['username']);
            $sdate= $_POST['sdate'];
            $edate= $_POST['edate'];
            $role='2';
            if ($name == '' || $department == '' || $mobile == '' || $email == '' || $sdate == '' || $edate == '' || $username == '')
            {
                $error = 'ERROR: Please fill in all required fields!';
                valid($id,$name,$department,$email,$mobile,$username,$sdate,$edate, $error);

            }
            else
            {
                mysqli_query($db,"UPDATE users SET name='$name', department='$department' , mobile='$mobile', mail='$email', username='$username', sdate='$sdate', edate='$edate' WHERE id='$id'") or die(mysqli_error());
                header("Location: viewco.php");
            }
        }
        else
        {
            echo 'Error!';
        }
    }
    else
    {
        if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
        {
            $id = $_GET['id'];
            $result = mysqli_query($db,"SELECT * FROM users WHERE id=$id") or die(mysqli_error());
            $row = mysqli_fetch_array($result);
            if($row)
            {
                $name = $row['name'];
                $department = $row['department'];
                $mobile = $row['mobile'];
                $email= $row['mail'];
                $username= $row['username'];
                $sdate= $row['sdate'];
                $edate= $row['edate'];
                $role='2';
                //valid($id, $name, $department,$mobile,$username,$sdate,$edate,'');
                valid($id,$name,$department,$email,$mobile,$username,$sdate,$edate,'');
            }
            else
            {
                echo "No results!";
             }
        }
        else
    {
        echo 'Error!';
    }
}
?>