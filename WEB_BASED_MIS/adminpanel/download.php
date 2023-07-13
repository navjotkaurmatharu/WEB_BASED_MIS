<?php
$title = "Download | OCA ";
include( 'include/header.php' );
?>
<style>
	#sec1,
	#sec2,
	#sec3,
	#sec4,
	#sec5,
	#sec6,
	#sec7,
	#sec8 {
		cursor: pointer;
	}
	
	.table th {
		padding: 5px;
		text-align: center;
		background-color: #F2F2F2;
		padding-left: 15px;
	}
	
	.table td {
		padding: 5px;
		text-align: center;
		padding-left: 15px;
	}
	
	.tablepartion {
		padding: 2%;
		background-color: #F2F2F2;
		font-weight: 600;
		text-transform: uppercase;
		color: #f55d2c
	}
	
	.imgsize>img {
		width: 150px;
		height: 75px;
		transition: .5s;
	}
	.featured_img{width: 100%; }
	.s234{ padding:2% 5%}
	.s234 h3{text-transform: uppercase;}
	.flag_img{ height: 100px; border-radius: 100%}
	td{padding: 0.5% !important;}
</style>


<div id="layoutSidenav_content">
	<main class="maintop">
		<div class="container-fluid">
			<ol class="breadcrumb mb-10">

				<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a>
				</li>
				<li class="breadcrumb-item active  font-weight-bold">Download Excel Sheet
				</li>
				

			</ol>


			<h3 style="text-align:center;font-family: 'Playfair Display', serif;
font-family: 'Quicksand', sans-serif;font-weight:500; padding-bottom:15%;padding-top:15%;">For Downloading your Data in Excel Format,
<form method="get" action="finaldownload.php"><input type="submit" value="Click here !" style="color:#ffffff;background-color:red;border-radius:15px;border:5px solid #ffffff;padding:5px;padding-left:30px;padding-right:30px;margin-top:10px;font-size:20px;font-weight:800;" /><h3>
			
			
							
							
		</div>
	</main>
	<?php
	include( 'include/footer.php' );
	?>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>