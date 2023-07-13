<?php

include('adminpanel/conn/dbconnection.php');
session_start();

/*Login Script*/



if(isset($_POST['userlogin'])){



$emUser=$_POST['lp1'];

$emUserPassword=$_POST['lp2'];

$GetAdminLoginDetails=0;

$emPassword=base64_encode($emUserPassword);

$GetAdminLogin=mysqli_query($Db,"select * from userlogins where userid='".$emUser."' and password='".$emPassword."'  ");

$GetAdminLoginDetails=mysqli_num_rows($GetAdminLogin);

if($GetAdminLoginDetails>0){

$getID=mysqli_fetch_array($GetAdminLogin);

$idlogin=$getID[1];


$_SESSION['usersession']=$idlogin;

header('location:upload.php');

	}

	else
	{

	header('location:loginpage.php?res=1');

	}



}

if(isset($_POST['usersignup']))
{
$name=$_POST['sp1'];
$email=$_POST['sp3'];
$role=$_POST['sp4'];
$password=base64_encode($_POST['sp8']);
$p1=$_POST['sp8'];
$p2=$_POST['sp9'];
$tabledataarray=0;
$tabledata=mysqli_query($Db,"select userid from userlogins where userid='".$email."'");
$tabledataarray=mysqli_num_rows($tabledata);
if($tabledataarray>0){
header('location:signup.php?res=1');	
}else{		
if($p1==$p2)
{
$new_pro_list= mysqli_query($Db,"insert into userlogins (name,userid,role,password) Values ('".$name."','".$email."','".$role."','".$password."') ");
$_SESSION['usersession']=$email;
header('location:upload.php');
}
else
{
header('location:signup.php?res=2');
}
}
}




if(isset($_POST['indexlogout'])){

session_start();

session_destroy();

	header('location:index.php');

}
	
/*---excel--*/

if(isset($_POST['uploadexcel'])){
$filename=$_FILES["file"]["tmp_name"];
	
if($_FILES["file"]["size"] > 0){
$file = fopen($filename, "r");
$aa=1;
$s=1;
while (($emapData = fgetcsv($file, 100000, ",")) !== FALSE){
		
		if(!empty($emapData[0])){
			$farmername=$emapData[0];}else{
			$farmername='';
	    }

		if(!empty($emapData[1])){$village=$emapData[1];}else{$village='';}

		if(!empty($emapData[2])){$taluka=$emapData[2];}else{$taluka='';}

		if(!empty($emapData[3])){$district=$emapData[3];}else{$district='';}

		if(!empty($emapData[4])){$state=$emapData[4];}else{$state='';}

		if(!empty($emapData[5])){$country=$emapData[5];}else{$country='';}

		if(!empty($emapData[6])){$agriculturelandholding=$emapData[6];}else{$agriculturelandholding='';}

		if(!empty($emapData[7])){$gender=$emapData[7];}else{$gender='';}

		if(!empty($emapData[8])){$icsname=$emapData[8];}else{$icsname='';}

		if(!empty($emapData[10])){$plotarea=$emapData[10];}else{$plotarea='';}

		if(!empty($emapData[11])){$cropvariety=$emapData[11];}else{$cropvariety='';}

		if(!empty($emapData[12])){$cottoncroppedarea=$emapData[12];}else{$cottoncroppedarea='';}

		if(!empty($emapData[13])){$irrigationtype=$emapData[13];}else{$irrigationtype='';}
		
		if(!empty($emapData[14])){$cottonproductionperfarmer=$emapData[14];}else{$cottonproductionperfarmer='';}


		if(!empty($emapData[15])){$pricepaidtofarmer=$emapData[15];}else{$pricepaidtofarmer='';}
		
		if(!empty($emapData[16])){$premium=$emapData[16];}else{$premium='';}

    $result = mysqli_query($Db,"INSERT into farmersdata (farmername,village,taluka,district,state,country,agriculturelandholding,gender,icsname,plotarea,cropvariety,cottoncroppedarea,irrigationtype,cottonproductionperfarmer,pricepaidtofarmer,premium) values('$farmername','$village','$taluka','$district','$state','$country','$agriculturelandholding','$gender','$icsname','$plotarea','$cropvariety','$cottoncroppedarea','$irrigationtype','$cottonproductionperfarmer','$pricepaidtofarmer','$premium')");
		
		$s++;

	         }

	         fclose($file);
		 header('location:final1.php');

		 }

}

?>



