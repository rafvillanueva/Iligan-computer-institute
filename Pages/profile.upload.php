
<?php 
       include 'includes/header.php';
       require_once('../config/dbcon.php');
       require_once('includes/session-b.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<link rel="stylesheet" type="text/css" href="css/raf-style.css">
<div class="wrapper"> 

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar-a.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">  
    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <h1>
        <span class="fa fa-edit"></span> <b>Profile Uploading..</b></b>
      </h1> 
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile Upload</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body"> 
                      <?php include'controller/controls.php'; ?>
                      <div class="modal-body">
                            <center>
                        <form method="POST" autocomplete="off" enctype="multipart/form-data"> 
                                            <h4 style="font-weight:bold;"><span class="fa fa-image"></span> Please Select Picture <i style="color:red;">(Maximum Size: 8MB)</i></h4>
                                            <br>
                                            <input type="file" name="image" style="font-size:18px;" required>
                                            <br>
                                </center>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" name="save_profile" class="btn btn-success"><span class="fa fa-save"></span> Save</button>
                    </div>
                    </form> 
                      
            </div>
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




