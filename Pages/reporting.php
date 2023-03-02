
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
<script src="../dist/js/sweetalert.min.js"></script>

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
      <li class=""><a href="Enrollment"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
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
       <b><span class="fa fa-bar-chart"></span> Student's Report</b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Student's Report</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row"> 
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border container-fluid">
              <form class="form-inline" method="POST" action="">
                <button type="button" class="btn btn-default btn-md"><span class="fa fa-print"></span> Report</button>
                <button type="button" class="btn btn-default btn-md"><span class="fa fa-file-excel-o"></span> Export</button>
                <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#Summary"><span class="fa fa-list"></span> Summary</button>
                  <div class="pull-right">
                    <label>From :</label>
                    <input type="date" class="form-control" placeholder="Start"  name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" required>
                    <label>To :</label>
                    <input type="date" class="form-control" placeholder="End"  name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>" required>
                    <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span> Search</button> <a href="Reporting" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
                  </div>
              </form>            
            </div>
            <div class="box-body">
              <div class="container-fluid">         
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Student Name (<i style="color:red;"><small>Lastname, Firstname, Middlename</small></i>)</th>
                      <th>LRN</th>
                      <th>Age</th>
                      <th>Contact Number</th>
                      <th>Grade Level</th>
                      <th>Strand</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php include'includes/tablerange.php';?> 
                  </tbody>
                </table>
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
?>
</div>
<?php 
include 'includes/scripts.php'; 
include'assets/modal/kraf.php';
?>
</body>
</html>






