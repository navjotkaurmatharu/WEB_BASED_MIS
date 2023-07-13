<?php include('header.php'); ?>
<div id="carouselExampleFade"  data-interval="2000" class="carousel slide carousel-fade" style="font-family: 'Playfair Display', serif;
font-family: 'Quicksand', sans-serif;background-color:#f2f2f2;">
 
 <?php
	  if(empty($_SESSION['usersession'])){
	  echo'<img src="adminpanel/img/OCA-full-name-yellow.png" height=20%; width=20%; style="margin-left:29%; margin-bottom:15%; margin-top:13%;" > You are not logged in.&nbsp Please Login to upload a Excel file.&nbsp<a href="loginpage.php" style="color:blue;">Click here.</a>';
	  }
	else{
		
		$uid=$_SESSION["usersession"];
		$u_name=mysqli_query($Db,"select name from userlogins where userid='".$uid."'");
		$rows=mysqli_fetch_array($u_name);
		
		echo '<p style="margin-left:40%; font-size:24px; font-weight:600; padding-top:10%;padding-bottom:7%;"><i class="fa fa-check-circle"></i>&nbsp Your Excel File is now Uploaded!</p> ';
		
		echo ' <form method="post" action="fun.php"><input type="submit" name="indexlogout" Value="Uploaded and want to Log out?" style="margin-left:42%;background-color:red; color:white; font-weight:600;padding:10px;border-radius:15px;border:10px solid white;margin-top:10%;margin-bottom:1%"/></form>  <a href="index.php" style="color:blue;font-weight:600; margin-left:40%;margin-bottom:1%;">Want to Go back & Upload another Excel File?</a>';
	
		}
	   
	?>
</div>
<?php include('footer.php'); ?>