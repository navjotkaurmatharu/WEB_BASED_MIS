<?php
include('adminpanel/conn/dbconnection.php');
session_start();

?>
<html>
<head>
<title>WEB BASED MIS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link rel = "icon" href ="adminpanel/img/OCA-full-name-yellow.png" type = "image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Quicksand:wght@300&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid" style="height:40px; background-color:#000;color:#fff;padding-left:15%;padding-top:8px;font-family: 'Playfair Display', serif;
font-family: 'Quicksand', sans-serif;">&nbsp Upload & Download Excel Sheets. </div>
<nav class="navbar navbar-expand-sm" style="font-family: 'Playfair Display', serif;
font-family: 'Quicksand', sans-serif; font-weight:bold;">
  <div class="container-fluid" style="padding-left:100px;">
    <a class="navbar-brand" href="index.php">
      <img src="adminpanel/img/OCA-full-name-yellow.png" alt="basket" style="width:90px; height:65px;" class="rounded-pill"> Your Excel Sheet
	  </a>
	
	  
	  
	  
	  <?php
	  if(empty($_SESSION['usersession'])){
	  echo'<ul class="navbar-nav " >
	   <li class="nav-item">
        <a class="nav-link" href="adminpanel/adminlogin.php"><i class="fa fa-eye" aria-hidden="true" style="font-size:20px;"></i>&nbsp Are you an Admin?</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="loginpage.php"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp Log in</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="signup.php"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Sign Up</a>
      </li>
    </ul>';
	  }
	else{
		
		$uid=$_SESSION["usersession"];
		$u_name=mysqli_query($Db,"select name from userlogins where userid='".$uid."'");
		$rows=mysqli_fetch_array($u_name);
		
		echo '<a href="index.php"  style="padding-left:100px;font-size:25px;color:#000000;"></a>Hello ' ,$rows[0];
		}
	   
	?>
	
	
  </div>
</nav>