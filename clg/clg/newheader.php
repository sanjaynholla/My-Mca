<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BMS</title>

<!-- Bootstrap -->
<link href="file:///S|/xampp/htdocs/clg/css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<style type="text/css">
	.col-lg-2{
		text-align:center;
	}
	.header-1{
		background:#F5F5F5;
	}
	.dash{
		margin-top: 150%;
	}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    
}
	body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 75%;
    width: 200px;
    /*position: fixed;*/
    height: 100%;
    z-index: 1;
    top: 0;
    left: 10px;
    background-color: #F5F5F5;
    overflow-x: hidden;
    padding-top: 30px;
    font-size: 10px;
	  margin-top: -1%;
	  float: left;
    border: 0.5px solid #F5F5F5;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #5B7AD8;
    display: block;
	font-family: 'Josefin Sans', sans-serif;
}
h1
{
	font-family: 'Josefin Sans', sans-serif;
	font-size: 25px;
	color: white;
	float: center;
  background-color: #5B7AD8;
  padding:10px;
  border-radius: 16px;
}

.sidenav a:hover {
    color: #294AAF;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

/*.sidenav button
{
  padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #5B7AD8;
  font-family: 'Josefin Sans', sans-serif;
}*/

</style>
</head>
<body>
<nav class="navbar navbar-default col-lg-offset-1 col-lg-10" style="background:#FCFCFC">
  <div class="container-fluid header-1"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="row"><a><img src="images/Header.png" alt="bms logo" width="1300" height="150" class="img-responsive center"/></a>
    <div class="col-md-6 col-md-offset-3"> </div>
  </div>
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group"> </div>
</form>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="col-lg-2">
	<div class="sidenav">
  <h1><?php echo $_SESSION["username"];?></h1>
  <!--<a href="#">Home</a>-->
  <?php
    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
    echo "<a href='$url'>Back</a>"; 
  ?>
  <a href="logout.php">Logout</a>
  </div>
  </div>
  <!--<div class="container">
  <div class="dash">
  <h2 class="text-center col-lg-9 col-lg-offset-2">Dashboard</h2>
  </div>
	</div>-->
</body>
</html>
