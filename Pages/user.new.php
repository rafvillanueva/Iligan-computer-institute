<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php');
       include 'controller/GEN-ID.php';
?>
<!-- Modal -->
<?php include'includes/modal_logs.php'; ?>
<!-- end modal -->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper"> 
<?php include 'includes/navbar.php'; ?> 
<link rel="stylesheet" type="text/css" href="../login/css/shake.css">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<style type="text/css">
  th{
    color:white;
  } 
</style>
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
              <li class=""><a href="user-account"><i class="fa fa-arrow-left"></i> <span>Return</span></a></li>
              <li class=""><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-power-off"></i> <span>Log-out</span></a></li>
            </ul>
          </section>
  <!-- /.sidebar -->
 </aside> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="fa fa-user-plus"></span> <b>Create New Account</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Create New Account</li>
      </ol>
    </section>

    <!-- Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
                    <div id="idsp"></div>
                    <form class="form-horizontal" onsubmit="return false" autocomplete="on">
                        <div class="form-group">
                          <div class="col-sm-9">
                            <input type="hidden" id="user_id" class="form-control" readonly value="ICI<?php echo $user_id; ?>" style="width: 25%;">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Complete Name :</label>
                          <div class="col-sm-9">
                            <input type="text" id="a_Complete" class="form-control" placeholder="Enter Full name here.." required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Username :</label>
                          <div class="col-sm-9">
                            <input type="text" id="username" class="form-control" placeholder="Enter username here.." required>
                          </div>
                        </div>
                
                        <div class="form-group">
                          <label class="control-label col-sm-3">Password : </label>
                                <div class="col-sm-8">
                                  <input type="text" id="password" required class="form-control" placeholder="Enter Password here..">
                                </div>
                                <div class="col-sm-1">
                                   <span onclick="password_default()" class="btn btn-default pull-right">Default</span>
                                </div>
                        </div>  
                        <div class="form-group">
                          <label class="control-label col-sm-3" for="email">Account type :</label>
                          <div class="col-sm-9">
                            <select id="type" class="form-control"  required>
                                  <option value="" disabled selected>---</option>
                                  <option value="Administrator">Administrator</option>
                                  <option value="Faculty">Faculty</option>
                                  <option value="Registrar">Registrar</option>
                            </select>
                          </div>
                        </div>
                            <hr>
                            <button onclick="insertdata()" class="btn btn-default active pull-right btn-flat" style="background-color:#D72958; color:white;"><span class="fa fa-check"></span> Save Account</button>
                    </form> 
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
<script src="../dist/js/command/rafjas.js"></script>
</div>
</body>
</html>
