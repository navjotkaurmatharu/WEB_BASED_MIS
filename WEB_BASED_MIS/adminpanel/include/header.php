<?php
session_start();
if(empty($_SESSION['admsession'])){
	header( 'location:index.php?res=3' );
}
include( 'conn/dbconnection.php' );





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin Panel log in</title>
<link href="css/styles.css" rel="stylesheet">
<link href="css/admin-style.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">
 <link rel = "icon" href ="img/Eo_circle_green_arrow-down.svg.png" type = "image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Quicksand:wght@300&display=swap" rel="stylesheet">

<!-- Vendor Stylesheets -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<style>
.breadcrumb {
	margin-bottom: 10px !important;
}
.sb-nav-fixed #layoutSidenav #layoutSidenav_nav .sb-sidenav .sb-sidenav-menu {
	padding-bottom: 50px;
}
</style>
</head>

<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr"> <a class="navbar-brand logo-brand" href="dashboard.php" style="font-size:14px">Your Excel Sheet.</a>
  <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
  <!--<a href="dashboard.php" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>-->
  
  <ul class="navbar-nav ml-auto mr-md-0">
    <li class="nav-item p-2"> </li>
    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button"  aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> ADMIN</a>
      <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <form method="post" action="conn/fun.php">
          <a href="index.php"><button type="submit" class="btn btn-danger btn-sm navbar-btn btnpadng radius0 ml-4" name="logoutadmin" style="margin-right: 20px;"><span class="glyphicon glyphicon-log-in"></span><i class="fa fa-lock"></i>&nbsp Log Out</button></a>
        </form>
      </div>-->
    </li>
  </ul>
</nav>
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="p-2 text-center">
          
          <img src="img/Eo_circle_green_arrow-down.svg.png" class="img-fluid" style="width:50%; border-radius:7px"/>
          
        </div>
       
        <a class="nav-link active" href="dashboard.php"> &nbsp &nbsp  &nbsp &nbsp  &nbsp
        <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i> </div>
       Dashboard </a> 
         <a class="nav-link active" href="download.php"> &nbsp  &nbsp &nbsp  &nbsp
        <div class="sb-nav-link-icon"><i class="fa fa-download"></i></div>
       Download Data </a>
	 
       
           
      
      </div>
    </div>
  </nav>
</div>
