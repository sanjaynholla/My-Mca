<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 75%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 20px;
    margin-top: 175px;
    background-color: #8F8F8F;
    overflow-x: hidden;
    padding-top: 30px;
    font-size: 10px;
    border: 0.5px solid #FDFDFD;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
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
</style>
</head>
<body>

<div class="sidenav">
  <a href="logout.php">Logout</a>
</div>

<div class="main">

</div>
     
</body>
</html> 
