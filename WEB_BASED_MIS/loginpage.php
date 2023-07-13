<?php
include('adminpanel/conn/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>User Login</title>
	<link href="adminpanel/css/styles.css" rel="stylesheet">
	<link href="adminpanel/css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="adminpanel/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="adminpanel/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

    <body class="bg-sign" style="background-image: url(adminpanel/img/bckg.png); background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mt-2">
                            <div class="col-lg-5 mt-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
									<div style="width: 100%;" class=""><img src="adminpanel/img/OCA-full-name-yellow.png" style="display: block; margin: auto; width: 90px; height:90px; margin-top:10px;" />
							
                                    <div class="card-body">
    <form method="post" action="fun.php">
        <div class="form-group">
            <label class="form-label" for="inputEmailAddress">Enter Username:*</label>
            <input class="form-control py-3" id="lp1" name="lp1" type="text" placeholder="Enter Username" autocomplete="off" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="inputPassword">Enter Your Password*</label>
            <input class="form-control py-3" id="lp2" name="lp2" type="password" placeholder="Enter password" autocomplete="off" required>
        </div>
	
		
		<div class="form-group">
            <label class="form-label" for="inputPassword">New here?</label>
            <a href="signup.php"> click here to sign up </a>
        </div>
        
        
        <div class="form-group d-flex align-items-center justify-content-between mt-0 mb-0">
           
             <input type="submit"  id="btnvalid" name="userlogin" class="btn btn-dark hover-btn" value="Login"  style="width:100%;"/>
        </div>
        
        <div class="form-group text-center">
                            <?php
                            if(!empty($_GET['res'])){
                            if($_GET['res']==1){
                            echo 'Login Details are Incorrect';
                            }
                            if($_GET['res']==2){
                            echo 'Logout Successfully';
                            }
                            if($_GET['res']==3){
                            echo 'Please Login to Continue';
                            }
                            }
                            ?>
                        </div>
    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
		 <script src="admin/js/jquery-3.4.1.min.js"></script>
        <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/js/scripts.js"></script>
		<script src="admin/js/ajax.js"></script>		
		
		
    </body>
</html>
<script>
$('#spinn').hide();
</script>