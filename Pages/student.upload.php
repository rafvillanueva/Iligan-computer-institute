
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php'); 
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">

      <!-- GET FUNCTIONS -->
      <?php
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $edit = mysqli_query($mysqli, "SELECT * FROM tbl_student WHERE stud_id = '$id'");
              $row = mysqli_fetch_array($edit);
            }
      ?>
  
      <!-- END GET -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">  
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
         <img src="<?php echo (!empty($_SESSION['image_location'])) ? 'uploads/'.$_SESSION['image_location'] : '../img/user-account.png'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['a_Complete']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div> 
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree" style="letter-spacing:1px;">
      <li class="header">c-Panel</li>
      <li class=""><a href="Records-view?id=<?= $_GET['id']?>&type=Records-view"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
      <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include'includes/modal_logs.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <b>Registered <span class="fa fa-angle-double-right"></span> Student Details</b> <span class="fa fa-angle-double-right"></span> <b>Uploading New Picture ..</b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Upload New Picture</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
             <!--  <button href="#" data-toggle="modal" data-target="#add-record" class="btn btn-primary btn-md btn-flat"><i class="fa fa-plus"></i> Add Record</button> -->
                    <?php 
                          if($row['gender'] == "Male"){
                    ?>
                        <div class="media-left">
                            <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$row['image_location'] : '../img/unuser1.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:100px;">
                        </div> 
                    <?php
                          }else{
                    ?>
                        <div class="media-left">
                            <img src="<?php echo (!empty($row['image_location'])) ? 'uploads/'.$row['image_location'] : '../img/unuser2.png'; ?>" class="thumbnail" alt="User Image" style="width:110px; height:100px;">
                        </div> 
                    <?php
                          }
                    ?> 
             <h2 style="letter-spacing:1.5px; font-weight: bold; color:rgb(50, 128, 57);"><?=$row['l_name']; ?>, <?=$row['f_name']; ?> <?=$row['m_name']; ?></h2>
            </div>
            <?php include'controller/controls.php'; ?>
            <div class="box-body">
                  <form method="POST" autocomplete="off" enctype="multipart/form-data">
                      <h4 style="font-weight:bold;"><span class="fa fa-image"></span> Please Select Picture <i style="color:red;">(Maximum Size: 8MB)</i></h4><br>
                      <input type="file" name="image" style="font-size:18px;" required><br>
                      <div class="modal-footer">
                          <button type="submit" name="stu_profile_save" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Save picture</button>
                      </div>
            </div></form>
          </div>
        </div>
      </div>
    </section>   
  </div>
<?php 
      include 'includes/footer.php'; 
      include 'includes/scripts.php';
?>
</div>
</body>
</html>




