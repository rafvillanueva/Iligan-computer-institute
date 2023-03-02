
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session.php'); 
       $sqlE =mysqli_query($mysqli,"SELECT * FROM user WHERE username='{$_SESSION['username']}'");
        $eprow=mysqli_fetch_array($sqlE);
?>
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<body class="hold-transition skin-blue sidebar-mini">
<script src="../dist/js/sweetalert.min.js"></script> 
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?> 
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-user"></span> <b>Acccounts Management</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Change Password</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php 
        // if(isset($_SESSION['error'])){
        //   echo "
        //     <div class='alert alert-danger alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-warning'></i> Error!</h4>
        //       ".$_SESSION['error']."
        //     </div>
        //   ";
        //   unset($_SESSION['error']);
        // }
        // if(isset($_SESSION['success'])){
        //   echo "
        //     <div class='alert alert-success alert-dismissible'>
        //       <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        //       <h4><i class='icon fa fa-check'></i> Success!</h4>
        //       ".$_SESSION['success']."
        //     </div>
        //   ";
        //   unset($_SESSION['success']);
        // }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <!--  <button href="#" data-toggle="modal" data-target="#add-record" class="btn btn-primary btn-md btn-flat"><i class="fa fa-plus"></i> Add Record</button> -->
            </div>
            <div class="box-body">
                <div class="container-fluid">
          <?php
                if(isset($mysqli,$_POST['submit'])){
                $old_password1 =mysqli_real_escape_string($mysqli,$_POST['old_password']);
                $password =mysqli_real_escape_string($mysqli,$_POST['password']);
                $cpassword =mysqli_real_escape_string($mysqli,$_POST['cpassword']);
                $old_password=md5($old_password1);
                        if($eprow['password']!=$old_password){
          ?>
               <script type="text/javascript">
                           swal("Error!", "Current Password Invalid. Please try again.", "error"); 
               </script>                                    
          <?php   
                }else{
                    if($password!=$cpassword){
          ?>
               <script type="text/javascript">
                           swal("Warning!", "Password not match. Please try again.", "warning"); 
               </script>
          <?php      
               }else{
               $password =md5($cpassword);  
               $sqliU ="UPDATE user SET password='$password' WHERE username='{$_SESSION['username']}'";
               $res = mysqli_query($mysqli,$sqliU);
               if($res==1){
          ?>
          <script type="text/javascript">
                      swal("Password Changed!", "Your password has been changed successfully.", "success"); 
          </script>
          <?php
              }
              }
              }
              } 
          ?>
</div>

<div class="col-lg-12">
    <div class="panel panel-default">
            <div class="panel-heading"><span class="fa fa-edit"></span> Change Password</div>
                <div class="panel-body">

                    <form method="post" action="change_password" class="form-horizontal">
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Current Password :</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter Current Password here.." name="old_password" required>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">New Password :</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter New Password here.." name="password" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="pwd">Confirm Password :</label>
                          <div class="col-sm-9">          
                            <input type="password" class="form-control" id="pwd" placeholder="Enter Confirm Password here.." name="cpassword" required>
                          </div>
                        </div>
                            <hr>
                            <button type="submit" name="submit" class="btn btn-default pull-right" id="btn-ici"><span class="fa fa-key"></span> Change password</button>
                    </form>           
                </div>
    </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  <style type="text/css">
    .td-raf{
      font-weight:bold;
      color:red;
    }
  </style>
<?php 
      include 'includes/footer.php'; 
      include 'includes/scripts.php';
?>
</div>
</body>
</html>
