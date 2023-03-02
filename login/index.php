<!doctype html>
<html lang="en">
  <head>
  	<title>ICI | Login</title>
  	<link rel=icon href="../img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/shake.css">
	<link rel="stylesheet" href="css/style.css"> 
	<script src="../dist/js/sweetalert.min.js"></script> 
	</head>
	<body>
	<section class="ftco-section" style="margin-top:-60px;">
		<div class="container">
			<?php include('query.php');?>
			<div class="row justify-content-center"> 
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap py-5">
								<center><img class="align-items-center" src="../img/logo.png" width="200px" height="100px"></center>
				        	 	<br>
		      					<p class="text-center">Sign in by entering the information below</p>
								<form method="POST" class="login-form" autocomplete="off">
		      						<div class="form-group">
		      							<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      								<input type="text" class="form-control" placeholder="Username" name="username" required>
		      						</div>

	            					<div class="form-group">
	            						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              							<input type="password" class="form-control" placeholder="Password" name="password" required>
	            					</div>
	    
	            					<div class="form-group">
	            						<button type="submit" name="submit" class="btn form-control btn-primary rounded submit px-3">LOGIN</button>
	            					</div>
	          					</form>
	        		</div><hr>
				</div>
			</div>
		</div>
		<center><b>Copyright</b> © 
                <b>
                 	<?php 
                        date_default_timezone_set("Asia/Manila");
                        echo date("Y");         
                    ?>
                </b> 
                <b style="color:#63A1A7;">ICI CDO</b>. All rights reserved. 
        </center>
        <center style="font-family: 'Exo'; font-size: 15px; margin-top:5px;">
                <a href="https://www.facebook.com/myicicdo" target="black"><span style="color: #4064AC; font-size: 32px;" class="fa fa-facebook"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #5AA4D6; font-size: 32px;" class="fa fa-twitter"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #D62E73; font-size: 32px;" class="fa fa-instagram"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #90D8F0; font-size: 32px;" class="fa fa-skype"></span></a>&nbsp;&nbsp;
                <a href="https://www.youtube.com/channel/UC7Rqe5XIKzmkfjA-g7t-LUg"><span style="color: #C91F1F; font-size: 32px;" class="fa fa-youtube"></span></a>&nbsp;
        </center>
	</section>
	  <script src="js/jquery.min.js"></script>
	  <script src="js/popper.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/main.js"></script>
	</body>
</html>

