<?php include('header.php'); ?>
<div  style="font-family: 'Playfair Display', serif;
font-family: 'Quicksand', sans-serif;background-color:#f2f2f2;">
 
 <?php
	  if(empty($_SESSION['usersession']))
	  {
	  echo'<img src="adminpanel/img/OCA-full-name-yellow.png" height=20%; width=20%; style="margin-left:29%; margin-bottom:15%; margin-top:13%;" > You are not logged in.&nbsp Please Login to upload a Excel file.&nbsp<a href="loginpage.php" style="color:blue;">Click here.</a>';
	  }
	else
	{
		
		$uid=$_SESSION["usersession"];
		$u_name=mysqli_query($Db,"select name from userlogins where userid='".$uid."'");
		$rows=mysqli_fetch_array($u_name);
		
		echo '<a href="index.php"  style="margin-left:26%;font-size:25px;color:#000000;margin-top:5%;"> </a>
		<form method="post" action="fun.php" enctype="multipart/form-data">
		<input type="file" accept=".csv" name="file" style="margin-left:43%;margin-top:12%;" required/>
		<input type="submit" name="uploadexcel" Value="Upload Excel File" style="margin-left:43%;margin-top:1%;background-color:#023020; color:white; font-weight:600;padding-left:35px;padding-right:35px;border-radius:20px;"/></form><br> ';
		
		echo ' <form method="post" action="fun.php"><input type="submit" name="indexlogout" Value="Log out?" style="margin-left:46%;background-color:red; color:white; font-weight:600;padding:10px;border-radius:15px;border:10px solid white;margin-top:10%;margin-bottom:2%"/></form> ';
		}
	   
	?>
</div>
<?php include('footer.php'); ?>