
<?php 
       include '../admin/includes/header.php';
       require_once('../config/dbcon.php');

?>
<!doctype html>
<style type="text/css">
  #i-raf{
    color:red; 
    font-size:13px;
    font-weight: bold;
  }
  #h5-student-header{
    letter-spacing:0.5px;
  }
  #i-header{
    color:orange;
  }
</style>
<html lang="en">
  <head>
  	<title>Student Registration</title>
  	<link rel=icon href="../img/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../login/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../login/css/shake.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
				<br>
				<div class="panel panel-default">
							  <div class="panel-body"><img src="../img/img_header.png" width="100%"></div>
							  <div class="panel-body">
							  	<?php include '../admin/includes/registration.php'; ?>
							  </div>
				</div>	
		</div>

				                <center><b>Copyright</b> © 
                                <b>	<?php 
                                      date_default_timezone_set("Asia/Manila");
                                      echo date("Y");         
                                 ?>
                                 </b> <b style="color:#63A1A7;">ICI CDO</b>. All rights reserved. </center>
            <center style="font-family: 'Exo'; font-size: 15px; margin-top:5px;">
                <a href="https://www.facebook.com/myicicdo" target="black"><span style="color: #4064AC; font-size: 32px;" class="fa fa-facebook"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #5AA4D6; font-size: 32px;" class="fa fa-twitter"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #D62E73; font-size: 32px;" class="fa fa-instagram"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #90D8F0; font-size: 32px;" class="fa fa-skype"></span></a>&nbsp;&nbsp;
                <a href=""><span style="color: #C91F1F; font-size: 32px;" class="fa fa-youtube"></span></a>&nbsp;
            </center>
	</section>
<br><br>
  <script src="../login/js/jquery.min.js"></script>
  <script src="../login/js/popper.js"></script>
  <script src="../login/js/bootstrap.min.js"></script>
  <script src="../login/js/main.js"></script>

	</body>
</html>

