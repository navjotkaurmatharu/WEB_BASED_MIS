<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Admin</title>
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/admin-style.css" rel="stylesheet">
	
	<!-- Vendor Stylesheets -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

    <body class="bg-sign" style="background-image: url(img/bckg.png); background-size: cover;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center mt-2">
                            <div class="col-lg-5 mt-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
									<div style="width: 100%;" class=""><img src="img/Eo_circle_green_arrow-down.svg.png" style="display: block; margin: auto; width: 20%; margin-top:20px;" />
							
                                    <div class="card-body">
    <form method="post" action="conn/fun.php">
        <div class="form-group">
            <label class="form-label" for="inputEmailAddress">Username:*</label>
            <input class="form-control py-3" id="v1" name="v1" type="text" placeholder="Enter Username" autocomplete="off">
        </div>
        <div class="form-group">
            <label class="form-label" for="inputPassword">Password*</label>
            <input class="form-control py-3" id="v2" name="v2" type="password" placeholder="Enter password" autocomplete="off">
        </div>
        
        
        <div class="form-group d-flex align-items-center justify-content-between mt-0 mb-0">
           
             <input type="submit"  id="btnvalid" name="logadmin" class="btn btn-sign hover-btn" value="Login" style="background-color: rgb(243, 107, 4) !important;" />
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
		 <script src="js/jquery-3.4.1.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
		<script src="js/ajax.js"></script>		
		
		
    </body>
</html>
<script>
$('#spinn').hide();
</script>